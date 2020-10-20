# Scratchpads Desired Architecture

## Environments

There are several different variations on Scratchpads deployments that we will wish to support, each with different requirements.

### get.scratchpads.eu

The NHM provides a hosting service for users who do not wish to host their own Scratchpads. For this service to remain efficient the application is load balanced across multiple app servers and data is split across multiple database servers.

### Bioacoustica

Bioacoustica is a standalone Scratchpad running in docker. It has many large audio files and may benefit from a more efficient file server or object storage service.

### Development environment

Currently Scratchpads development requires running a Docker system with Varnish, an application server, MySQL and Solr containers. Developers would benefit from being able to run parts of the application without these specific services being required.

### Other Docker services

There may be Scratchpads in use by others that we are unaware of, being run using the Docker containers. These sites may have specific requirements that the owners would benefit from being able to optimise for.

### Non-Scratchpads sites

Some sites are not Scratchpads but would benefit from using a shared codebase. For example, phenome10k.org is a standalone site with a specific user interface, but shares many functional requirements with Scratchpads. Being able to converge on the same codebase would save extra maintenance work for developers.

## Architectural Goals

To enable the portability and flexibility described in the previous document, the user interface must be agnostic about where data comes from or how it is stored. The front end must not care whether a particular data item is stored in a local text file, a web API, a Drupal database, or split across a number of different services.

To achieve this we can introduce a gateway whose responsibility is to communicate with the storage services on behalf of the UI, providing a stable API. Note that this API does not have to allow for generic use or follow any particular standards; since the only user of the API is the specific UI under control of the developers the API can reflect the exact operations required by the UI.

Different queries from the UI might be handled in different ways:

| UI query | Gateway responsibility |
| - | - |
| Who is the current user?		| 		Ask auth provider |
| Get a list of X-type items	| 		Ask data store |
| Search for X query					| 		Ask search index |
| Download X file							| 		Ask object storage |
| Can user make X edit?				| 		Ask ACL system |

Any gateway will be able to answer all of these questions, but may have different service providers that they ask for the information. This lets a given gatway select the best tool for the job, rather than relying on some monolithic backend that claims to do everything but does it badly.

```
+-----------+                    +---------+             +----------+
| Front end |                    | Gateway |             | Services |
+-----------+                    +---------+             +----------+
			|----- getTaxonomyTree() -----> | ----> FS: require('./tree.json')
                                      | ----> Web: fetch('http://tree')
																			| ----> DB: sql`SELECT * FROM tree`
```

Using this architecture also allows the front end to be swapped without requiring backend changes. For example, if the scratchpads team wish to develop a mobile app with the same functionality as the web UI, it would be trivial to introduce a web UI that exposes the gateway's functions as a RPC API for the app to use. Note that this exchange only works for user interfaces that perform the same tasks; introducing a usage statistics interface, for example, would require development of extra gateway methods (or an entirely separate gateway).

## Modularity vs Composition

In Scratchpads 2, additional features can be added to individual sites through the use of Drupal modules.

To avoid the development of a plugin architecture, Scratchpads front end should be compositional. A standard Scratchpad is composed of a specific set of features, and any advanced use cases will need to compose these with any custom functionality as users see fit, using the native language's API.

Decomposition would allow different configurations to provide different platforms:

 - Core Scratchpads platform (single-site server)
 - Additions for NHM/multi-site deploy
   - Legacy integration
   - Developer login
 - Multi-site management platform – get.scratchpads.eu / Aegir
   - Find/load site config
   - Site signup
   - Management/maintenance
 - scratchpads.eu, stats, cite, classifications, ...


## Front end

- Aims: Reusable/modular (original sp aims & twg dev group aims)

- Migration path: Phased approach

- Data-driven: Monitor URL access, resource creation, do UX research
