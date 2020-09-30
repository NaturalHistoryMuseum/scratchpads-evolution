# Scratchpads Redevelopment

## [The Problem](./1-problem.md)

The Scratchpads team has until November 2022 to migrate the platform away from Drupal 7. There are many issues associated with moving to Drupal 9, the most prominent being the development effort involved. It is, we feel, worth instead spending this effort creating a new system that doesn't have the drawbacks of Drupal development.

The Scratchpads front end, being our key differentiator from other platforms, should be our main focus of development. To make the best of our resources, data services such as data can and should be handled by other platforms. This will require a different architecture from Scratchpads 2.

## [The Architecture](./2-architecture.md)

To give us the flexibility to change our service providers over time and across individual sites, we should develop the front end in a way that is agnostic to those providers. This requires a gateway that provides a stable API for the UI to use, and mediates requests by conducting them to the appropriate service provider(s).

## [The Approach](./3-approach.md)

To get code into production as quickly as possible, we can implement an incremental approach to code release. In summary:

- Both the new and legacy platforms run simultaneously
- The legacy platform acts as the data source for both front ends
- Initially all requests are served by the legacy front end
- As features are added to the new front end, requests can start to be served by that front end on a page-by page basis (either opt-in or opt-out by the user)
- Once the new front end is considered feature complete, the data can be migrated to a new backend and the legacy platform can be discarded

In order for this to work, we need new data services that can replace the legacy data service. Although these aren't strictly needed until the end of development, we want to make some provisional decisions as soon as possible so that we can start using and testing the services to ensure they are fit for integration with our project.

Service providers we need to consider:

 - Natural history data storage & management
 - User authentication provider
 - Social & collaboration tools
 - Seach indexer

The first of these is by far the most important, being the core purpose of Scratchpads sites.

## [The Platforms](./4-platform-evaluation/README.md)

We looked at six different platforms and checked their fit against Scratchpads requirements.
