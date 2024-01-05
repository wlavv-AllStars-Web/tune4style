# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.3.2] - 2023-01-05
### Added

- Add COF parameters
- Add address indicator
- Add liability details
- Add subsequent payment parameters
- Add 3DS exemption & challenge enforcement

### Fixed

- Fix iframe payment logs
- Fix context (amount & currency) control

## [1.3.1] - 2022-12-02
### Added

- Add a copy button on webhooks URL
- Add option to group card payment options

### Changed

- Update default safety delay to 12 sec.
- Remove default iframe template value
- Update SDK to v4.5.0

### Fixed

- Remove spaces & other characters in phone fields
- Support currencies other than EUR in line items details
- Fix order status workflow in case of multiple webhooks calls
- Fix rounded prices in line items

## [1.3.0] - 2022-08-10
### Added

- Line Items (prices & cart details)
- Klarna & Oney payment methods

### Fixed

- Cart checksum calculation now includes vouchers

## [1.2.1] - 2022-07-11
### Changed

- Move & transform endpoint logo to generic logo in the payment methods tab
- Add a refresh link when iframe payment is rejected

## [1.2.0] - 2022-04-12
### Added

- UID value to log lines
- Customizable endpoints
- New return page after pending payment rejected

### Changed

- Update SDK
- Payment methods are refreshed after saving credentials
- Better order validation mechanism
- Update payment logos

## [1.1.1] - 2022-02-24
### Fixed

- Split orders are now associated with the module
- Order statuses of split orders are updated properly
- Simultaneous webhooks are processed correctly

## [1.1.0] - 2022-02-22
### Added

- First major version
