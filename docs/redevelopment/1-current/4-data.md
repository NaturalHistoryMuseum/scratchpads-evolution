| Platform                 | Solid |                                                                  | Wikibase |                                                                                       | Taxonworks |                                                                                                                                      | Dina Collections |                                                                                                                                              | Living Atlas |                                                                                                                            | QuitStore |                                                                       |
|--------------------------|-------|------------------------------------------------------------------|----------|---------------------------------------------------------------------------------------|------------|--------------------------------------------------------------------------------------------------------------------------------------|------------------|----------------------------------------------------------------------------------------------------------------------------------------------|--------------|----------------------------------------------------------------------------------------------------------------------------|-----------|-----------------------------------------------------------------------|
|                          | Score | Explanation                                                      | Score    | Explanation                                                                           | Score      | Explanation                                                                                                                          | Score            | Explanation                                                                                                                                  | Score        | Explanation                                                                                                                | Score     | Explanation                                                           |
| Data model compatibility | 3     | Uses RDF, which supports any data structure                      | 3        |                                                                                       | 3          | Contains equivalents for the core Scratchpads models and more. Data models can be extended with RDF-like triples using DataAttribute | 1                | Provides specimen and taxonomy models, but not biblio or SPM                                                                                 | 2            | No apparent literature data model. Core data models are not flexible, custom data will require development of new modules. | 3         | RDF-based                                                             |
| Platform Maturity        | 1     | Lists itself as “prototype”                                      | 3        | Rolled out by WikiData and other projects                                             | 2          | Only a demo instance available                                                                                                       | 2                | No sites in production (?)                                                                                                                   | 3            | Many sites in production                                                                                                   | 1         | No sites in production                                                |
| Development activity     | 3     | Regular development. Not funded but part of W3C.                 | 3        | Regular development and releases. Open source primarily developed by Wikimedia Berlin | 3          | Regular development and releases. Long term funding from Species File Group and National Science Foundation.                         | 1                | No recent updates or releases                                                                                                                | 3            | Regular development and releases. Funded by Australian Government.                                                         | 1         | No recent development                                                 |
| Data access              | 3     | Read-write SPARQL API                                            | 2        | Read-write API. Requires all predicates to be explicitly defined within wiki.         | 2          | Incomplete read-only API, decoupled front/back-end architecture                                                                      | 2                | Incomplete read-write API                                                                                                                    | 1            | SPM, Occurence & Taxon APIs are read only                                                                                  | 3         | Read-write SPARQL API                                                 |
| Standardisation          | 3     | API: SPARQL W3C standard. No restrictions on RDF protocols used. | 1        | Custom MediaWiki API. Custom data model standard used only by MediaWiki.              | 2          | Custom REST API, NOMEN ontology, moving towards more RDF-like approach                                                               | 2                | DINA is attempting to establish a set of standards, though it is not widely adopted or documented beyond the original OpenAPI specification. | 2            | API Not Standardised. Data models use Darwincore                                                                           | 3         | SPARQL and RDF                                                        |
| Collaboration            | 1     | Formal W3C working group                                         | 1        | Requires developer account                                                            | 3          | Open to contributions and collaboration with other projects                                                                          | 3                | Similar area, good relationship                                                                                                              | 3            | Github based development                                                                                                   | 1         | Github based development, led by research group at Leipzig university |