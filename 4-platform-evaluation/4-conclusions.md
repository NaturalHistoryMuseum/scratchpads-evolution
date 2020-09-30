
# Outcomes



## About this document

This document describes several existing data storage platforms and the results of their evaluation for use as part of the Scratchpads hosting service ([http://get.scratchpads.org](http://get.scratchpads.org/)), based on the criteria listed in _3-data-evaluation-plan.docx_ and findings listed in _platforms-under-evaluation.docx._ Based on these results, we make a recommendation for which service or services would be most appropriate to use.



## Criteria Importance



### High:

- Data model compatibility/flexibility

- Development activity



### Medium:

- Platform maturity

- Versioning/translation

- API maturity

- Data model standardisation



### Low:

- API standardisation

- Deployment





## Solid



Solid scores highly on the essential requirements; data models are completely flexible since data is stored as RDF; and development activity is regular and sustained, thanks to the fact that it is supported by a W3C working group. Another advantage is that the API and data models are standardised.



The largest disadvantage is that of maturity; the platform is still a prototype and aspects of it are subject to change.



## Wikibase



As with Solid, Wikibase scores highly on development activity and flexibility, but being required to explicitly define all terms instead of using the RDF model is an abstraction that adds unnecessary complexity. In fact, it would be simpler to run an instance of Blazegraph, the graph store that Wikibase uses internally. As a data storage service, the only advantage that Wikibase has over a plain graph store is that it has in-built support for revision history.



## Taxonworks



Taxonworks also has high development activity and and data compatibility. Being a taxonomy and biodiversity platform it supports all of the core Scientific content types required by Scratchpads, including version history and translation where appropriate. Data models are based on existing RDF concepts and can be extended with additional triples. As a domain-specific platform Taxonworks has the ability to optimise data storage and retrieval for the kinds of requests the frontend is likely to make.



The platform is still in somewhat of a development phase, but it does have long term funding and regular development activity. While the public API is read-only, the frontend is decoupled from the backend, which can be used to access the data directly.



## Dina Collections



The Dina Collections platform is aimed at collections management, so it doesn’t support the full range of data models required by Scratchpads, which is an important criteria. The other high-importance concern is development activity, which hasn’t been active in the past year.



The data models and API are based on existing standards which is beneficial but these alone are not enough to justify usage with Scratchpads.



## Living Atlases



The Living Atlases platform is, by its own admission, “for the aggregation and delivery of biodiversity data”, and as such it doesn’t provide a write API for the kinds of data Scratchpads collects. While it might be possible to add the missing functionality as a new service, it would likely be almost as much work as developing a data storage service from scratch.



## QuitStore



QuitStore, as an RDF store, has capacity for any data type, just as Solid does. It is designed specifically as a version control system for RDF data, and uses standard and mature APIs including SPARQL and git.



Although the project is part of a research group, it is not a funded and its development activity is intermittent, which is a major drawback.



## Recommendation



The two most viable platforms for Scratchpads appear to be Taxonworks and Solid.



In terms of a working relationship, Taxonworks would be the best choice of the two. Both projects would stand to gain from such a relationship, and both projects are working for similar audience bases.



An argument for choosing Solid could be made on the basis of it being backed by such an influential organisation as the W3C. However, this alone would not guarantee its long-term stability or even completion; Taxonworks on the other hand already has the funding to continue, and a specific audience to be held accountable to – and a partnership with Scratchpads would likely improve the chance of both projects remaining viable into the future.
