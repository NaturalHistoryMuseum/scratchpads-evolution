
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


The less compatible the data model, the harder it will be to migrate existing data to the new service. Here, “core data models” are defined to be the default data models for a new scratchpad and data models for optional features enabled by at least 50% of sites.



|Level|Description|
|-|-|
|1|Scratchpads core data models do not appear to fit well with the target's data models|
|2|The target platform has a wide range of data models which map well to the Scratchpads core data models.|
|3|The target platform does not place significant restrictions on what data models are represented, or how.|




### Data Versioning & Translation


Some Scratchpads users require content translation or version history. If these are not well-supported by the target platform it may be difficult to implement these features.



|Level|Description|
|-|-|
|1|The target platform does not provide affordances for translation or data versioning|
|2|The platform makes specific considerations for either text translation or data versioning.|
|3|The platform makes specific considerations for both text translation and data versioning.|



### Platform Maturity


A platform that has not been well-tested in real projects may have unexpected problems during operation and be more difficult to maintain. Specifically, we are concerned with situations where the platform is used as a backend to another service.

Here, TRL refers to the EU’s definition of [Technology Readiness Levels](https://ec.europa.eu/research/participants/data/ref/h2020/wp/2014_2015/annexes/h2020-wp1415-annex-g-trl_en.pdf).



|Level|Description|
|-|-|
|1|The target platform is rated TRL 6 or below; no online demo or testing deploy is available.|
|2|The target platform is rated TRL7 or TRL 8; one or more demo or test deploys are available online, or platform has thorough pre-deploy test coverage (>75% coverage)|
|3|The target platform is rated TRL 9; Platform is used in production by one or more external organisations|



### Development Activity


A platform that is receiving regular updates is likely to stay secure and become more efficient/stable over time.



|Level|Description|
|-|-|
|1|The target platform does not have any recent development activity (last 6 months)|
|2|The target platform does not have regular development activity but does release security patches when necessary|
|3|The target platform has regular development activity and releases|



### API Maturity


An incomplete API may be unstable and require workarounds to read/write some data.



|Level|Description|
|-|-|
|1|The API is not complete|
|2|The API is mostly complete (>80%) and has high-level documentation|
|3|The API is complete, meets project requirements and has thorough documentation|



### System Complexity


A system with more features than needed may be more difficult to maintain or have more system requirements.



|Level|Description|
|-|-|
|1|The platform includes a large number of features not relevant to Scratchpads|
|2|The platform includes a small number of features not relevant to Scratchpads|
|3|The platform provides only functions that are necessary and useful for Scratchpads|

### API Standardisation


A system with a standard API will require less custom code to connect to and will allow flexibility with other platforms.



|Level|Description|
|-|-|
|1|The platform's API is neither standardised nor well documented|
|2|The platform's API is custom but are well scoped/documented|
|3|The platform's API uses well-established standards|



### Data Model Standardisation


A system with a standard data model will enable easier migration of data to and from that platform, and increase the reusability of data by other services. For example, has the data model been made available as an RDF ontology? Is an established standard like Darwin Core being used?



|Level|Description|
|-|-|
|1|The platform's data models have not been standardised|
|2|The platform's data models have been published in a standardised way|
|3|The platform's data models are based on established standards|



### Openness


A project that is open to external input may be able to implement features that make it easier to use for Scratchpads.



|Level|Description|
|-|-|
|1|The platform's development is closed or private|
|2|The platform's development is not community driven but is open to collaboration|
|3|The platform's development is community-driven and is open for collaboration|



### Sustainability


Sustainable projects are likely to be those with financial support and a development roadmap.


|Level|Description|
|-|-|
|1|The project does not have long-term financial support or a development roadmap|
|2|The project has either long-term financial support or a development roadmap|
|3|The project has both long-term financial support and a development roadmap|



### Data Availability


Scratchpads needs to offer protection against data loss or service disruption.



|Level|Description|
|-|-|
|1|There are no affordances for data backup, restore, or redundancy|
|2|There are methods for data backup, restore, or redundancy|
|3|There are clear and simple methods for data backup, restore, and redundancy|



### Deployment


A system that is easy to deploy is likely to be easier to upgrade and maintain, with less chance of service disruption.



|Level|Description|
|-|-|
|1|There are no specific instructions for deployment|
|2|There are specific instructions for deployment|
|3|There is a clear and simple method for deployment and upgrade|



### Data Flexibility


A system that allows customization of data models is likely to be able to support a wider range of Scratchpad sites.



|Level|Description|
|-|-|
|1|The data models are not customizable|
|2|There is partial customization of the data models available|
|3|The data models are fully customizable|



## Scratchpads Data Models


For platforms that don’t have fully flexible data models, we can compare a core set of data models used by a majority of Scratchpads:


| | |
|-|-|
|Biblio|Bibliographic references|
|[Species profile model](https://tdwg.github.io/ontology/ontology/voc/SpeciesProfileModel.rdf)|Textual descriptions of taxa|
|Taxonomy|Taxonomy vocabulary and nodes|
|[Specimen/Observation](https://dwc.tdwg.org/terms/)|Record of an occurrence of an organism, based on Darwin Core|
|Ecological interactions|An ecological relationship between two taxa|






## Platforms Under Evaluation


-   [Solid Community Server](https://github.com/solid/community-server)

-   [WikiBase](https://www.wikiba.se/)

-   [Taxonworks](https://github.com/SpeciesFileGroup/taxonworks)

-   [Dina Collections](https://dina-demo-docs.nrm.se/docs/)

    -   Progress: unable to set up due to [incorrect documentation](https://github.com/dina-web-nrm/dina-collections/issues/584)

-   [Atlas of Living Australia](https://github.com/AtlasOfLivingAustralia/ala-install#setup-the-living-atlas-demo)

    -   Progress: demo not working; [workarounds suggested](https://github.com/AtlasOfLivingAustralia/ala-install/issues/419)

-   [QuitStore](https://github.com/AKSW/QuitStore)
