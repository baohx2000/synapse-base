CHANGELOG
=========

## [v1.4.1](https://github.com/synapsestudios/synapse-base/compare/v1.4.0...v1.4.1) (2015-03-19)

* Fix bug with RowExists and other related constraints.

## [v1.4.0](https://github.com/synapsestudios/synapse-base/compare/v1.3.4...v1.4.0) (2015-03-16)

* Add test helper InjectMockTransactionTrait
* Have ControllerTestCase use InjectMockTransactionTrait
* Add output when starting a specific migration
* Add times for each migration and total time
* Change in migration class naming for easier sorting
* Add createdDatetimeColumn and updatedDatetimeColumn to AbstractMapper
* Deprecate createdTimestampColumn and updatedTimestampColumn
* Add starting message to migrations
* Rewrite UpdaterTrait and DeleterTrait to support tables whose primary key is not `id`
* Move nested transaction simulation to Transaction class
* Add bind() values to OAuth server routes
* Data Object: Add support for fluent interface in setAs* methods
* Allow RowExists, RowsExist, and RowNotExists constraints to match on custom field names
* Create SecurityContextMockInjector trait 

## [v1.3.4](https://github.com/synapsestudios/synapse-base/compare/v1.3.3...v1.3.4) (2015-02-10)

* Allow 'order' option to be specified on `FinderTrait::findBy` just like `findAllBy`
* Add TransactionAwareInterface and TransactionAwareTrait
* Have AbstractController implement TransactionAwareInterface
* Auto-inject Transaction object into classes implementing TransactionAwareInterface

## [v0.2.6](https://github.com/synapsestudios/synapse-base/compare/v0.2.5...v0.2.6) - 2014-08-08

* Disallowed `--drop-tables` option in `install:run` command
* Added missing feature to update social login provider tokens upon login

## [v0.2.5](https://github.com/synapsestudios/synapse-base/compare/v0.2.4...v0.2.5) - 2014-08-06

* Added MapperTestCase::setMockResults()
* Removed MapperTestCase::setUpMockResultCallback()
* Minor refactoring


## [v0.2.4](https://github.com/synapsestudios/synapse-base/compare/v0.2.2...v0.2.4) - 2014-08-04

* Fixed bug in user endpoint that caused endpoint to return validation errors no matter what

## [v0.2.2](https://github.com/synapsestudios/synapse-base/compare/v0.2.1...v0.2.2) - 2014-07-25

* Added AbstractSecurityAwareTestCase to provide access to a mock security context and the currently logged in user to both ControllerTestCase and MapperTestCase

## [v0.2.1](https://github.com/synapsestudios/synapse-base/compare/v0.2.0...v0.2.1) - 2014-07-25

* Added changelog
