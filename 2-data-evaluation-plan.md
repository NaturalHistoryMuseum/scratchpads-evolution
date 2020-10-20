# Scratchpads Backend Evaluation Process

This document outlines the criteria by which we will evaluate potential data storage platforms for use with future versions of Scratchpads. The selected platform will be used by the NHM hosted Scratchpads service (i.e. get.scratchpads.org) and recommended for use with standalone Scratchpads.

## What Data?

Not all data used by Scratchpads will necessarily be kept in the same storage service. Different kinds of data will have different storage and access requirements, or may be deprecated all together.

Scientific data (e.g. taxonomy, observation records, etc) are the primary kinds of data we are concerned with storing, since they represent the core content of a Scratchpad. These data may also have specific requirements such as versioning or translation, or may be modified by site owners with the addition of extra fields.

Social data (e.g. blog posts, calendar events, comments, etc) is not as widely used across all Scratchpads and may or may not be supported by a given platform.

Other kinds of data - such as search indexes, access control settings, or user interface configuration - are concerned with the technical functioning of the system. The way they are stored and represented may depend on technical details of the chosen content storage system.

This evaluation process is concerned primarily with the first kind of data, scientific data. Other kinds of data not supported by the chosen system may need a separate evaluation process where there is not a clear alternative storage solution available, or we may decide to drop support for that type of data.

## Criteria

All evaluation criteria have three levels of scoring; 1 - does not comply, 2 - partially complies, and 3 - fully complies. Each criterion has a more specific description of what each level means for that criterion.

### Data Model Compatibility

Data model compatibility can be broken down into three sub-criteria:

1. It must support Scratchpads core data types
2. It must allow sites to add extra fields or link extra data to a data model
3. It must be able to support multiple sites and distinguish the data models belonging to each site

Core data types are those scientific data types used my a majority of Scratchpads:

| | |
|-|-|
|Literature/Biblio|Bibliographic references|
|Taxon Descriptions/[Species profile model](https://tdwg.github.io/ontology/ontology/voc/SpeciesProfileModel.rdf)|Textual descriptions of taxa|
|Taxonomy|Taxonomy vocabulary and nodes|
|[Specimen/Observation](https://dwc.tdwg.org/terms/)|Record of an occurrence of an organism, based on Darwin Core|
|Locations|Geographical points or areas|

Support for extra fields would by default allow us to associate a given data item with an individual site,
though platforms may have specific support for this association by default.


|Level|Description|
|-|-|
|1|It is not practical/possible to map Scratchpads data models to the target platform|
|2|Data models can be mapped but it is not possible to customise fields or data|
|3|It is possible to map all data models to the target platform and customise fields|

### Data Access and API

Scratchpads must be able to read and write to the platform programatically.
This may be through an HTTP API, decoupled architecture, command line application, etc.

|Level|Description|
|-|-|
|1|Full read-write access is not possible|
|2|Full read-write access is possible but its implementation is incomplete or not currently exposed|
|3|Full read-write access is possible and its implementation is complete|

### Development Activity

A platform that is receiving regular updates is likely to stay secure and become more efficient/stable over time.
We're interested in both historical development activity and likely future development activity based on whether
the developers are funded or otherwise supported in their work.


|Level|Description|
|-|-|
|1|The target platform does not have any recent development activity (i.e. in the last month)|
|2|The target platform has recent development activity but no long-term support or funding|
|3|The target platform has regular development activity and long-term support or funding|


### Platform Maturity

A platform that has not been well-tested in real projects may have unexpected problems during operation and be more difficult to maintain. Specifically, we are concerned with situations where the platform is used as a backend to another service.

Here, TRL refers to the EU’s definition of [Technology Readiness Levels](https://ec.europa.eu/research/participants/data/ref/h2020/wp/2014_2015/annexes/h2020-wp1415-annex-g-trl_en.pdf).



|Level|Description|
|-|-|
|1|The target platform is rated TRL 6 or below; no online demo or testing deploy is available.|
|2|The target platform is rated TRL7 or TRL 8; one or more demo or test deploys are available online, or platform has thorough pre-deploy test coverage (>75% coverage)|
|3|The target platform is rated TRL 9; Platform is used in production by one or more external organisations|



### API/Data model Standardisation


A system with a standard API and data models will require less custom code to connect to and will allow flexibility with other platforms.
A system with a standard data model will enable easier migration of data to and from that platform, and increase the reusability of data by other services.
A standard may be formally specified as a standard, or may be a de-facto standard that has broad adoption but no formal specification.


|Level|Description|
|-|-|
|1|The platform features are not standardised|
|2|The platform features are standardised but not well supported|
|3|The platform features use well-established standards|



### Collaboration


We want to work with platforms who will support our development effort; those platforms that directly benefit from Scratchpads integration are likely going to be easier to work with and more able to support our development efforts.


|Level|Description|
|-|-|
|1|The platform is not interested in external collaboration|
|2|The platform welcomes integrations but may not gain direct benefit from Scratchpads specifically|
|3|The platform will directly benefit from Scratchpads involvement|


## Platforms Under Evaluation


-   [Node Solid Server](https://github.com/solid/node-solid-server/)

-   [WikiBase](https://www.wikiba.se/)

-   [Taxonworks](https://github.com/SpeciesFileGroup/taxonworks)

-   [Dina Collections](https://dina-demo-docs.nrm.se/docs/)

-   [Atlas of Living Australia](https://github.com/AtlasOfLivingAustralia/ala-install#setup-the-living-atlas-demo)

-   [QuitStore](https://github.com/AKSW/QuitStore)
