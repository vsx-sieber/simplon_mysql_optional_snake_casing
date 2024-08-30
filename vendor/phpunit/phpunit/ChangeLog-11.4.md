# Changes in PHPUnit 11.4

All notable changes of the PHPUnit 11.4 release series are documented in this file using the [Keep a CHANGELOG](https://keepachangelog.com/) principles.

## [11.4.0] - 2024-10-04

### Changed

* [#5915](https://github.com/sebastianbergmann/phpunit/pull/5915): Bootstrap extensions before building test suite
* [#5917](https://github.com/sebastianbergmann/phpunit/pull/5917): Seal event facade before loading the test suite
* [#5923](https://github.com/sebastianbergmann/phpunit/pull/5923): Filter configured deprecation triggers when displaying deprecation details
* [#5927](https://github.com/sebastianbergmann/phpunit/pull/5927): `#[RequiresPhpunitExtension]` attribute
* [#5928](https://github.com/sebastianbergmann/phpunit/issues/5928): Filter tests based on the PHP extensions they require
* The output of `--list-groups` now shows how many tests a group contains
* The output of `--list-suites` now shows how many tests a test suite contains

[11.4.0]: https://github.com/sebastianbergmann/phpunit/compare/11.3...main
