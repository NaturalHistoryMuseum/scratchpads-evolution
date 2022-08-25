# Scratchpads Evolution

Formerly called Scratchpads Re-development.  

Renamed to Scratchpads Evolution to represent an ongoing development approach, where real development evaluation and prototyping can happen sooner and in parallel with the current Scratchpads 2 platform, sometimes feeding into it into releases.  

From a contemporary development standpoint "evolution" indicates agile and iterative approach rather than a waterfall big bang approach thereby avoiding perpetual documentation and discussion without actual real development. 

Finally, "evolution" reflects our domain of tracking species, which have come about through evolution.

Therefore, this repo represents going beyond Scratchpads 2, but can include functionality extensions in Scratchpads 2. We could also think of Scratchpads 3.0 as being part of this repo to.

## [The Problem](./docs/redevelopment/1-current/1-problem.md)

The Scratchpads team has ~~until November 2022~~ \[UPDATED\]  [**NOVEMBER 1, 2023**](https://www.drupal.org/psa-2022-02-23) to migrate the platform away from Drupal 7. There are many issues associated with moving to Drupal 9, the most prominent being the development effort involved. It is, we feel, worth instead spending this effort creating a new system that doesn't have the drawbacks of Drupal development. 

A few comments on 'drawbacks of Drupal development':
- the drawbacks include deployment and devops of managing a large quanity of scratchpads. If we had a full software stack of any platform (Django, Wordpress, Plone etc) for *each* site, we could face the same challenge of rolling out releases to 1000s of sites. So it's not necessarily inherent Drupal problem, but rather how it is *applied* to a large number of separate scratchpads instances.
- Drupal 9 (and 10, in 2022) is different from Drupal 7 under-the-bonnet and improves upon things like managing site configuration and modernised development practices such as Symfony and PHP composer which facilitate maintainance and extension.
- Performance is a major consideration (which was not listed in the 6 criteria below) and there are challenges with Drupal but it's not alone in that. Specifically for Scratchpads this is search, navigating large structured datasets such as hierarchical taxonomies and supporting server infrastructure.
- On the basis of the above comments, Drupal still has merit alongside other platforms being considered

The Scratchpads front end, being our key differentiator from other platforms, should be our main focus of development. To make the best of our resources, data services such as data can and should be handled by other platforms. This will require a different architecture from Scratchpads 2.

## [Data Evaluation Plan](./docs/redevelopment/1-current/2-data-evaluation-plan.md)

How can we measure and compare platforms' conformity to the Scratchpads use case?

We present six important criteria for any platform Scratchpads integrates with, and a three-point grading system for quantifying each.

The criteria are:

 - Data Model Compatibility
 - Data Access and API
 - Development Activity
 - Platform Maturity
 - API/Data model Standardisation
 - Collaboration

For each of these we are able to score them on a scale from 1 (platform does not comply) to 3 (platform fully complies).

## [Evaluation](./docs/redevelopment/1-current/3-evaluation.md)

We explore each of six platforms chosen for comparison, evaluating them against the relevant criteria.

The six platforms are:
-   [Node Solid Server](https://github.com/solid/node-solid-server/)
-   [WikiBase](https://www.wikiba.se/)
-   [Taxonworks](https://github.com/SpeciesFileGroup/taxonworks)
-   [Dina Collections](https://dina-demo-docs.nrm.se/docs/)
-   [Atlas of Living Australia](https://github.com/AtlasOfLivingAustralia/ala-install#setup-the-living-atlas-demo)
-   [QuitStore](https://github.com/AKSW/QuitStore)

The quantitative data is presented in [markdown](./4-1-data-as-markdown.md) and [csv](./4-2-data-as-csv.csv) formats.

## [Conclusions](./docs/redevelopment/1-current/5-conclusions.md)

We review the scores and comparisons and make the case for Taxonworks as the best fitting platform.
We note that this is still open for consideration and that we hope to make an intial decision by 9 October 2020.
