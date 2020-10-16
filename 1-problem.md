# The Uncertain Future of Scratchpads

[Drupal 7](https://www.drupal.org/drupal-7.0), the codebase on which the [Scratchpads](http://scratchpads.eu) VRE is heavily dependant, will reach [End of Life on 28 November 2022](https://www.drupal.org/psa-2020-06-24).

Running update and security-patched code is important for Scratchpads users and developers, therefore for the project to continue we must migrate to another platform.

## Upgrading Drupal

The official recommendation for Drupal 7 sites is to [migrate to Drupal 9](https://www.drupal.org/docs/understanding-drupal/drupal-9-release-date-and-what-it-means/what-happens-to-drupal-7-now-that).

The concern with this is that Scratchpads depends upon a large number of modules, many of which are custom and others which have not recieved updates for a long time. For these modules, no upgrade path exists and it is anticipated that many modules will effectively need to be rewritten from scratch.

Scratchpads developers have previously upgraded the platform from Drupal 6 to 7. This migration took a large ammount of developlent time, and we believe the migration to Drupal 9 is likely to take a similar effort.

By following the recommended upgrade path developers would need to spend a large ammount of time modifying or rewriting existing code, unable to develop or release new features until the rework is complete.

## Migration to an alternative platform

Since platform migration is enevitable, the Scratchpads developers can take the opportunity to investigate construction of a new platform that adresses some of the issues of the Drupal platform.

### Tight coupling prevents Portability

Much of the code written for Scratchpads 2 is not portable due to its tight coupling with the Drupal framework and API. In migration to a new system, Scratchpads can be developed in a way that allows its code to stay largely agnostic of any external dependencies. With a platform designed in this way,

### A Generic Framework Reduces Efficiency

By attempting to be a framework than can cater for any purpose, a Drupal system ends up running much more code than necessary. In the case of a simple website or blog this cost is balanced by the fact that most or all of the required functionality is provided, and has been optimised. Due to the complexity of Scratchpads, the reward is not as clear, since most of the functionality has to be provided by the development of new modules, many of which are not efficient when used with Drupal.

Developers working on Scratchpads are also less efficient, since they now have to learn how to use Drupal's large API, as well as APIs of the add on modules, many of which are not well documented.

### Other issues with existing Scratchpads

- Time consuming development
- Lacks modern UI
- Lacks e.g. linked data integration

## Requirements for a Scratchpads Platform

The niche that Scratchpads holds is that it offers a specific user experience that isn't covered by other platforms. To make the most of our developer resources we want to be able to focus development on the front end, and rely on existing projects for a backend.

Furthermore, if we're able to partner with a platform that directly benefits from the integration of a Scratchpads front end there may be incentive for that partner to provide more support to Scratchpads front end development.

However we need to be careful to ensure Scratchpads remains decoupled from any potential platform. No matter how much planning and platform review we do, we cannot predict the future with complete accuracy so having the flexibility to change platforms is important.

There are many other advantages to using a decoupled approach:

- Facilitates fast and regular delivery of new features to users
- Allows sharing of code between different projects
- Facilitates integration of additional services for sites with special requirements
- Increases potential longevity
