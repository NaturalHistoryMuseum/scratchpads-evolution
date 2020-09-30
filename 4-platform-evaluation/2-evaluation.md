
1.  # Data Storage Platforms Under Evaluation

2.  Todo:

3.  - Number of developers in each team

4.  - Table of feature comparison


Evaluations have been made based on available documentation and running software. Where these resources are obscure or not available for a given criterion, a best-guess evaluation has been made.



## Node Solid Server

Solid is developed openly through the [W3C Solid Community Group](https://www.w3.org/community/solid/). It is not a funded project but as part of the W3C it is supported in structure, organisation and guidance.



Solid uses the [LDP protocol](https://www.w3.org/TR/ldp/) to store individual RDF graphs, or resources, in a filesystem-like structure. The API [supports SPARQL](https://github.com/solid/solid-spec/blob/master/api-rest.md#alternative-using-sparql) for read and write of individual resources. Architecture diagrams are [stored on GitHub](https://github.com/RubenVerborgh/solid-server-architecture).



The [Node Solid Server](https://github.com/solid/node-solid-server/) is a reference implementation of Solid in NodeJS. It bills itself as a [prototype](https://inrupt.net/) although is currently at version 5.3.0 and has [roughly monthly releases](https://github.com/solid/node-solid-server/tags). The project attracts [contributions](https://github.com/solid/node-solid-server/graphs/contributors) from a many developers and there are 8 developers who have made more than 50 commits each, however most individual development activity tends to be over a specific period of time and not long term.



The [project readme](https://github.com/solid/node-solid-server/) contains instructions on running the server directly, using docker, or using as a library in NodeJS.



The Solid project website [lists only one public provider](https://solidproject.org/use-solid/), inrupt.net which is operated by Sir Tim Berners-Lee.





1.  ## WikiBase


[Wikibase](https://www.wikiba.se/) is a MediaWiki extension, and is the software that powers WikiData. It allows storage and representation of knowledge as linked data.



The data model for Wikibase is based around pages; a page represents an entity or a property, and the page's contents are statements about that entity or property. A statement is essentially a property and value pair. This entity-property-value model is conceptually equivalent to the subject-predicate-object model in RDF, although there are significant differences.



While in RDF a subject or predicate can be any URI, in a WikiBase statement an entity and property must be pages that exist within the wiki and therefore any existing RDF ontology we may wish to use must be explicitly recreated in the wiki (or imported using one of the [import tools](https://www.wikiba.se/import/)).



WikiBase has a read-only SPARQL endpoint that can expose entity statements and metadata in RDF format. Write operations must take place through the [MediaWiki API](https://www.mediawiki.org/wiki/Wikibase/API). WikiBase uses [Blazegraph](https://blazegraph.com/) as its storage engine, which is a high-performance RDF database.



Wikibase has built-in [multilingual capabilities](https://www.wikidata.org/wiki/Help:Multilingual).

1.  ### Development


Wikibase has a [regular commit frequency](https://github.com/wikimedia/mediawiki-extensions-Wikibase/graphs/commit-activity) and currently makes [releases every few months](https://hub.docker.com/r/wikibase/wikibase/tags). Those who wish to contribute to the project must apply for a [developer account](https://www.mediawiki.org/wiki/Developer_account). The [primary development](https://meta.wikimedia.org/wiki/Wikidata/Development) is by a team working at Wikimedia Deutschland.



The primary setup instructions on the Wikibase website are by using Docker. A more in depth set up process is [documented on mediawiki.org](https://www.mediawiki.org/wiki/Wikibase/Installation). There are no explicit instructions for setting up a high-availability system.



Projects that user Wikibase are listed on the [Wikibase showcase](https://www.wikiba.se/showcase/) page.



1.  ## TaxonWorks

    1.  ### Data Model


The TaxonWorks data model is available in the source repository as a [schema file](https://github.com/SpeciesFileGroup/taxonworks/blob/development/db/schema.rb). Included in the data model are equivalents for the core Scratchpads data types:





Biblio

Sources

[Species profile model](https://tdwg.github.io/ontology/ontology/voc/SpeciesProfileModel.rdf)

Notes

Taxonomy

Taxon_Names

[Specimen/Observation](https://dwc.tdwg.org/terms/)

dwc_occurrences

Ecological interactions

biological_associations



Users can customise data types by adding fields using the [DataAttribute](https://github.com/SpeciesFileGroup/taxonworks_doc/blob/master/faq/basics.md#can-a-user-add-their-own-fields) data type. These data attributes are actually RDF triples. Custom data types cannot be added without additional development.



In general, TaxonWorks is moving towards a more [graph-based, ontology-aware data structure](https://github.com/SpeciesFileGroup/taxonworks_doc/blob/master/faq/standards.md), meaning including using terms from the NOMEN ontology.



Revision history is available by default. It is also possible to add alternative values to fields, such as translations.



Currently users are implemented as custom records. Some consideration has been given to incorporating [OpenID Connect functionality](https://github.com/SpeciesFileGroup/taxonworks/issues/1731), and URIs for users may be introduced in the near feature, which would enable OpenID integration without it being part of the Taxonworks platform.

2.  ### Development


Taxonworks is funded by the [Species File Group and National Science Foundation](https://github.com/SpeciesFileGroup/taxonworks#funding). There is [regular development activity](https://github.com/SpeciesFileGroup/taxonworks/graphs/commit-activity) and [roughly weekly releases](https://github.com/SpeciesFileGroup/taxonworks/tags). The API is a [custom RESTful API](https://api.taxonworks.org/), and currently allows only read requests on a small number of endpoints, through write requests are [planned](https://github.com/SpeciesFileGroup/taxonworks/issues/1732). Recommended production deploy is using Kubernetes. [Instructions are provided](https://github.com/SpeciesFileGroup/install_taxonworks/blob/master/production/kubernetes/README.md) but not to much depth. The [Taxonworks registry](https://github.com/SpeciesFileGroup/taxonworks_doc/blob/master/REGISTRY.md) lists only one instance, that run by the project developers.





2.  ## DINA Collections

3.  DINA Collections uses [OpenAPI](https://spec.openapis.org/oas/v3.0.3), which is a REST-style API. The platform is composed of multiple modules, an overview of this is described in the [Data Model Concepts repository](https://github.com/DINA-Web/dina-model-concepts). The goal of the DINA project is to establish a set of Data Model and API standards that can be used by third parties, although they are not widely adopted yet, and nor are they well documented.




Different features are planned for different release phases:



Object Storage: Release 1

Users: Release 1

Agents: Release 1



Collection events, specimens, taxonomy, search: Release 2



Generic data module: Release 3



TODO: When are these release phases? What is agents module?



Dina project has some funding from Agriculture and Agri-Food Canada. Ends in 2022.



1.  ### Data Model


The data models for DINA Collections are alluded to [in the documentation.](https://dina-demo-docs.nrm.se/docs/packages/backend/serviceConfigurations/#model-configuration-schema) However the documentation is not complete, so further confirmation will be needed.



[Setup instructions](https://dina-demo-docs.nrm.se/docs/setup/setup-locally-for-development/) are provided but [are incomplete](https://github.com/dina-web-nrm/dina-collections/issues/584).





Biblio

?

[Species profile model](https://tdwg.github.io/ontology/ontology/voc/SpeciesProfileModel.rdf)

?

Taxonomy

Taxon/TaxonName

[Specimen/Observation](https://dwc.tdwg.org/terms/)

specimen

Ecological interactions

?



Development



There have been [no updates or releases since June 2019](https://github.com/dina-web-nrm/dina-collections/graphs/code-frequency).



1.  ## Living Atlases


Living Atlases (also known as the flagship project Atlas Of Living Australia) is a collection of front-end apps and back-end service tied together with a [logical service layer](https://support.ala.org.au/support/solutions/articles/6000196855--infrastructure-overview).

[Architecture](https://assets.ctfassets.net/uo17ejk9rkwj/3LEtHHSCGsWAQW2oYgmico/640645509423aca4b803231fe6a814f3/ALA_Key_Technical_Documentation_English_2.pdf)

[Quick start guide](https://github.com/AtlasOfLivingAustralia/documentation/wiki/LA-Quick-Start-Guide#basic-introduction-to-la)



1.  ### Data Services




Biblio

?

[Species profile model](https://tdwg.github.io/ontology/ontology/voc/SpeciesProfileModel.rdf)

Species profiles/BIE – read only API

Taxonomy

Taxonomy/BIE – read only API

[Specimen/Observation](https://dwc.tdwg.org/terms/)

Occurrence/Biocache – read only API

Ecological interactions

?



Taxonomy and species profiles are provided by the [bie-index](https://github.com/AtlasOfLivingAustralia/bie-index) module, which provides a search index for an existing Darwin Core archive. As it is only an indexing service it does not have a write API. All APIs are custom though [documented online](https://api.ala.org.au/).



Occurrence data is provided by the [biocache service](https://github.com/AtlasOfLivingAustralia/biocache-service), which uses a command line ingestion tool to import data, and does not have a write API (other data types provided by biocache such as metadata and annotations do have a write API).



A number of [other services](https://github.com/AtlasOfLivingAustralia/documentation/wiki/LA-Quick-Start-Guide#urls-of-your-la-node) for specific purposes exist. Data models for all modules use the DarwinCore ontology.



2.  ### Maturity


There are a large number of [sites in production](https://living-atlases.gbif.org/#participants). The project is split into [several components](https://github.com/AtlasOfLivingAustralia) all hosted on the ALA Github organisation, and as a whole receive regular and frequent updates and releases.



3.  ### Development




Development takes place on Github and accepts contributions from users. As the system is modular it is possible to develop custom modules for specific needs.



Deployment is done by Ansible. There is a repository of various [install scripts](https://github.com/AtlasOfLivingAustralia/ala-install) on Github. There is also a comprehensive [documentation repository](https://github.com/AtlasOfLivingAustralia/documentation/wiki/Infrastructure-Requirements).



ALA is Funded by the Australian government via NCRIS.









## QuitStore

[QuitStore](https://github.com/AKSW/QuitStore) is a versioned RDF store. It uses git and stores each change as a commit.



There are two main contributors and recently [development has been intermittent](https://github.com/AKSW/QuitStore/graphs/contributors). Point releases are made once every [three to four months](https://github.com/AKSW/QuitStore/tags), and the software has yet to reach version 1.



QuitStore is part of the [AKSW Research Group (Agile Knowledge Engineering and Semantic Web)](http://aksw.org/About.html), part of the University of Leipzig. The QuitStore project is not funded.



The Readme contains [instructions for installation](https://github.com/AKSW/QuitStore#getting-started) from source and using Docker.


**Next**: [Quantify the evaluations](./3-data.md)
