# Scratchpads Redevelopment

## [The Problem](./1-problem.md)

The Scratchpads team has until November 2022 to migrate the platform away from Drupal 7. There are many issues associated with moving to Drupal 9, the most prominent being the development effort involved. It is, we feel, worth instead spending this effort creating a new system that doesn't have the drawbacks of Drupal development.

The Scratchpads front end, being our key differentiator from other platforms, should be our main focus of development. To make the best of our resources, data services such as data can and should be handled by other platforms. This will require a different architecture from Scratchpads 2.

## [Data Evaluation Plan](./2-data-evaluation-plan.md)

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

## [Evaluation](./3-evaluation.md)

We explore each of six platforms chosen for comparison, evaluating them against the relevant criteria.

The six platforms are:
-   [Node Solid Server](https://github.com/solid/node-solid-server/)
-   [WikiBase](https://www.wikiba.se/)
-   [Taxonworks](https://github.com/SpeciesFileGroup/taxonworks)
-   [Dina Collections](https://dina-demo-docs.nrm.se/docs/)
-   [Atlas of Living Australia](https://github.com/AtlasOfLivingAustralia/ala-install#setup-the-living-atlas-demo)
-   [QuitStore](https://github.com/AKSW/QuitStore)

The quantitative data is presented in [markdown](./4-data.md) and [csv](./4-data.csv) formats.

## [Conclusions](./5-conclusions.md)

We review the scores and comparisons and make the case for Taxonworks as the best fitting platform.
We note that this is still open for consideration and that we hope to make an intial decision by 9 October 2020.
