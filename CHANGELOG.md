# Change Log

## [Unreleased](https://github.com/picqer/exact-php-client/tree/HEAD)

[Full Changelog](https://github.com/picqer/exact-php-client/compare/v3.0.0...HEAD)

**Closed issues:**

- Transaction lines [\#84](https://github.com/picqer/exact-php-client/issues/84)
- Too many redirects [\#76](https://github.com/picqer/exact-php-client/issues/76)

## [v3.0.0](https://github.com/picqer/exact-php-client/tree/v3.0.0) (2016-10-24)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.15.0...v3.0.0)

**Closed issues:**

- cURL error 56: SSL read: error:1408F119:SSL routines:SSL3\_GET\_RECORD:decryption failed or bad record mac, errno 0  [\#74](https://github.com/picqer/exact-php-client/issues/74)
- Selfmade class returns old price [\#73](https://github.com/picqer/exact-php-client/issues/73)
- Creating a new class [\#72](https://github.com/picqer/exact-php-client/issues/72)
- Guzzle Object could not be converted to string [\#70](https://github.com/picqer/exact-php-client/issues/70)
- OrderBy [\#69](https://github.com/picqer/exact-php-client/issues/69)

**Merged pull requests:**

- Extract Division from request @ financialtransaction/Transactions [\#83](https://github.com/picqer/exact-php-client/pull/83) ([WietseWind](https://github.com/WietseWind))
- Webhook authentication [\#81](https://github.com/picqer/exact-php-client/pull/81) ([tomcoonen](https://github.com/tomcoonen))
- Lazyload [\#80](https://github.com/picqer/exact-php-client/pull/80) ([kvij](https://github.com/kvij))
- Refresh callback [\#79](https://github.com/picqer/exact-php-client/pull/79) ([kvij](https://github.com/kvij))
- Type, Primary key and inconsistency fixes [\#77](https://github.com/picqer/exact-php-client/pull/77) ([kvij](https://github.com/kvij))
- Implemented the SubscriptionLines and the SubscriptionTypes. [\#75](https://github.com/picqer/exact-php-client/pull/75) ([SanderVerkuil](https://github.com/SanderVerkuil))
- Moved findId\(\) method from class Model to trait Findable [\#71](https://github.com/picqer/exact-php-client/pull/71) ([yohancreemers](https://github.com/yohancreemers))

## [v2.15.0](https://github.com/picqer/exact-php-client/tree/v2.15.0) (2016-07-25)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.14.0...v2.15.0)

**Merged pull requests:**

- Added method Model::userHasRights, added Address entity, expanded Contact entity [\#66](https://github.com/picqer/exact-php-client/pull/66) ([yohancreemers](https://github.com/yohancreemers))

## [v2.14.0](https://github.com/picqer/exact-php-client/tree/v2.14.0) (2016-07-20)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.13.0...v2.14.0)

**Closed issues:**

- SalesOrder / SalesOrderLine API [\#64](https://github.com/picqer/exact-php-client/issues/64)
- Connection not working [\#63](https://github.com/picqer/exact-php-client/issues/63)
- Error 400, Creating new class [\#62](https://github.com/picqer/exact-php-client/issues/62)
- SalesEntryLine missing AmountFC [\#58](https://github.com/picqer/exact-php-client/issues/58)

**Merged pull requests:**

- Added Costcenter and Costunit entities [\#65](https://github.com/picqer/exact-php-client/pull/65) ([yohancreemers](https://github.com/yohancreemers))

## [v2.13.0](https://github.com/picqer/exact-php-client/tree/v2.13.0) (2016-06-07)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.12.1...v2.13.0)

**Merged pull requests:**

- Added GeneralJournalEntry and GeneralJournalEntryLine models [\#61](https://github.com/picqer/exact-php-client/pull/61) ([remkobrenters](https://github.com/remkobrenters))
- Added missing fields for DocummentAttachment and SalesEntry [\#60](https://github.com/picqer/exact-php-client/pull/60) ([arendvw](https://github.com/arendvw))
- Feature cash entry [\#59](https://github.com/picqer/exact-php-client/pull/59) ([arendvw](https://github.com/arendvw))

## [v2.12.1](https://github.com/picqer/exact-php-client/tree/v2.12.1) (2016-05-23)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.12.0...v2.12.1)

**Merged pull requests:**

- Hotfix/2.12.1 - Add Stock to Item entity and fix StockPosition endpoint [\#57](https://github.com/picqer/exact-php-client/pull/57) ([johmanx10](https://github.com/johmanx10))

## [v2.12.0](https://github.com/picqer/exact-php-client/tree/v2.12.0) (2016-05-11)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.11.0...v2.12.0)

**Closed issues:**

- Cant connect to Exact [\#54](https://github.com/picqer/exact-php-client/issues/54)
- Does this library also work for Exact Globe? [\#53](https://github.com/picqer/exact-php-client/issues/53)
- Getting contact by account [\#52](https://github.com/picqer/exact-php-client/issues/52)

**Merged pull requests:**

- Added StockPosition entity [\#55](https://github.com/picqer/exact-php-client/pull/55) ([johmanx10](https://github.com/johmanx10))

## [v2.11.0](https://github.com/picqer/exact-php-client/tree/v2.11.0) (2016-03-14)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.10.0...v2.11.0)

**Closed issues:**

- How to fetch SalesInvoiceLines from SalesInvoice where there is a '\_\_deferred' array item? [\#48](https://github.com/picqer/exact-php-client/issues/48)

**Merged pull requests:**

- Add ID as a fillable field to WebhookSubscription [\#51](https://github.com/picqer/exact-php-client/pull/51) ([blyleven](https://github.com/blyleven))
- Add three fields to fillables for Contact [\#50](https://github.com/picqer/exact-php-client/pull/50) ([koenvu](https://github.com/koenvu))

## [v2.10.0](https://github.com/picqer/exact-php-client/tree/v2.10.0) (2016-03-04)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.9.1...v2.10.0)

**Merged pull requests:**

- A little gift from Samson-IT [\#49](https://github.com/picqer/exact-php-client/pull/49) ([SchizoDuckie](https://github.com/SchizoDuckie))
- Add ReceivableList entity. [\#47](https://github.com/picqer/exact-php-client/pull/47) ([feyobekius](https://github.com/feyobekius))

## [v2.9.1](https://github.com/picqer/exact-php-client/tree/v2.9.1) (2016-02-15)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.9.0...v2.9.1)

**Closed issues:**

- Login page [\#45](https://github.com/picqer/exact-php-client/issues/45)

**Merged pull requests:**

- Adds gender and title information to Contact entity. [\#46](https://github.com/picqer/exact-php-client/pull/46) ([marcelfw](https://github.com/marcelfw))

## [v2.9.0](https://github.com/picqer/exact-php-client/tree/v2.9.0) (2016-02-08)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.8.0...v2.9.0)

**Merged pull requests:**

- Adds AccountClassification [\#44](https://github.com/picqer/exact-php-client/pull/44) ([remkobrenters](https://github.com/remkobrenters))

## [v2.8.0](https://github.com/picqer/exact-php-client/tree/v2.8.0) (2016-02-04)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.7.0...v2.8.0)

**Merged pull requests:**

- Add WebhookSubscription entity [\#43](https://github.com/picqer/exact-php-client/pull/43) ([blyleven](https://github.com/blyleven))

## [v2.7.0](https://github.com/picqer/exact-php-client/tree/v2.7.0) (2016-02-02)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.6.1...v2.7.0)

**Closed issues:**

- Fetch more than 60 results [\#35](https://github.com/picqer/exact-php-client/issues/35)

**Merged pull requests:**

- add possibility to fetch more than 60 results. [\#42](https://github.com/picqer/exact-php-client/pull/42) ([feyobekius](https://github.com/feyobekius))
- Allows more system filter options [\#41](https://github.com/picqer/exact-php-client/pull/41) ([marcelfw](https://github.com/marcelfw))

## [v2.6.1](https://github.com/picqer/exact-php-client/tree/v2.6.1) (2016-01-25)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.6.0...v2.6.1)

**Closed issues:**

- Getting all or searching for clients [\#39](https://github.com/picqer/exact-php-client/issues/39)

**Merged pull requests:**

- Update MailMessageAttachment.php [\#40](https://github.com/picqer/exact-php-client/pull/40) ([feyobekius](https://github.com/feyobekius))

## [v2.6.0](https://github.com/picqer/exact-php-client/tree/v2.6.0) (2016-01-19)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.5.0...v2.6.0)

**Merged pull requests:**

- Add MailMessage and MailMessageAttachment entities [\#38](https://github.com/picqer/exact-php-client/pull/38) ([feyobekius](https://github.com/feyobekius))

## [v2.5.0](https://github.com/picqer/exact-php-client/tree/v2.5.0) (2016-01-18)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.4.0...v2.5.0)

**Closed issues:**

- find\(\) needs a select variable? [\#34](https://github.com/picqer/exact-php-client/issues/34)

**Merged pull requests:**

- Adds Symfony/Silex support and add Subscriptions [\#37](https://github.com/picqer/exact-php-client/pull/37) ([marcelfw](https://github.com/marcelfw))

## [v2.4.0](https://github.com/picqer/exact-php-client/tree/v2.4.0) (2015-12-31)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.3.0...v2.4.0)

**Closed issues:**

- Docblock hints for variables [\#23](https://github.com/picqer/exact-php-client/issues/23)

**Merged pull requests:**

- Add findWithSelect function [\#36](https://github.com/picqer/exact-php-client/pull/36) ([blyleven](https://github.com/blyleven))
- Add Document and DocumentAttachment entities [\#33](https://github.com/picqer/exact-php-client/pull/33) ([blyleven](https://github.com/blyleven))

## [v2.3.0](https://github.com/picqer/exact-php-client/tree/v2.3.0) (2015-12-25)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.2.0...v2.3.0)

**Closed issues:**

- How to add a "Boeking | Verkoopboek" [\#31](https://github.com/picqer/exact-php-client/issues/31)
- Dubbele entry [\#30](https://github.com/picqer/exact-php-client/issues/30)
- Retrieving result of save action [\#29](https://github.com/picqer/exact-php-client/issues/29)
- Connection - apiURL, authUrl, tokenUrl are fixed to .nl Endpoints. [\#25](https://github.com/picqer/exact-php-client/issues/25)

**Merged pull requests:**

- Added support for PrintedSalesInvoice [\#32](https://github.com/picqer/exact-php-client/pull/32) ([robinvalk](https://github.com/robinvalk))
- type-o [\#28](https://github.com/picqer/exact-php-client/pull/28) ([xewl](https://github.com/xewl))
- type-o [\#27](https://github.com/picqer/exact-php-client/pull/27) ([xewl](https://github.com/xewl))

## [v2.2.0](https://github.com/picqer/exact-php-client/tree/v2.2.0) (2015-12-14)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.1.3...v2.2.0)

**Closed issues:**

- Json output [\#22](https://github.com/picqer/exact-php-client/issues/22)
- Exception after updating account [\#21](https://github.com/picqer/exact-php-client/issues/21)

**Merged pull requests:**

- Make url's settable \#25 [\#26](https://github.com/picqer/exact-php-client/pull/26) ([casperbakker](https://github.com/casperbakker))
- Update VatCode.php [\#24](https://github.com/picqer/exact-php-client/pull/24) ([eMaurits](https://github.com/eMaurits))

## [v2.1.3](https://github.com/picqer/exact-php-client/tree/v2.1.3) (2015-11-09)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.9...v2.1.3)

## [v1.0.9](https://github.com/picqer/exact-php-client/tree/v1.0.9) (2015-11-09)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.1.2...v1.0.9)

## [v2.1.2](https://github.com/picqer/exact-php-client/tree/v2.1.2) (2015-11-09)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.1.1...v2.1.2)

**Closed issues:**

- SalesEntryLines end point pointing to Invoices [\#20](https://github.com/picqer/exact-php-client/issues/20)

## [v2.1.1](https://github.com/picqer/exact-php-client/tree/v2.1.1) (2015-11-03)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.1.0...v2.1.1)

## [v2.1.0](https://github.com/picqer/exact-php-client/tree/v2.1.0) (2015-11-02)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v2.0.0...v2.1.0)

**Merged pull requests:**

- Middleware insertion [\#19](https://github.com/picqer/exact-php-client/pull/19) ([stephangroen](https://github.com/stephangroen))
- Better exception handling [\#18](https://github.com/picqer/exact-php-client/pull/18) ([stephangroen](https://github.com/stephangroen))

## [v2.0.0](https://github.com/picqer/exact-php-client/tree/v2.0.0) (2015-10-27)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.8...v2.0.0)

**Merged pull requests:**

- Update to Guzzle 6 [\#3](https://github.com/picqer/exact-php-client/pull/3) ([stephangroen](https://github.com/stephangroen))

## [v1.0.8](https://github.com/picqer/exact-php-client/tree/v1.0.8) (2015-10-27)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.7...v1.0.8)

**Merged pull requests:**

- Added BankAccount endpoint & updated readme versioning example. [\#17](https://github.com/picqer/exact-php-client/pull/17) ([tomcoonen](https://github.com/tomcoonen))

## [v1.0.7](https://github.com/picqer/exact-php-client/tree/v1.0.7) (2015-10-03)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.6...v1.0.7)

**Closed issues:**

- Issue [\#14](https://github.com/picqer/exact-php-client/issues/14)

**Merged pull requests:**

- Added PurchaseEntry + some other changes [\#15](https://github.com/picqer/exact-php-client/pull/15) ([it-can](https://github.com/it-can))

## [v1.0.6](https://github.com/picqer/exact-php-client/tree/v1.0.6) (2015-08-12)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.5...v1.0.6)

**Closed issues:**

- adding salesinvoice [\#10](https://github.com/picqer/exact-php-client/issues/10)
- The UPDATE / DELETE function seems to be a bit strange [\#2](https://github.com/picqer/exact-php-client/issues/2)

**Merged pull requests:**

- Update PaymentCondition.php [\#13](https://github.com/picqer/exact-php-client/pull/13) ([eMaurits](https://github.com/eMaurits))
- Update Account.php [\#12](https://github.com/picqer/exact-php-client/pull/12) ([eMaurits](https://github.com/eMaurits))
- Added ItemGroup [\#11](https://github.com/picqer/exact-php-client/pull/11) ([sebastianberm](https://github.com/sebastianberm))
- Update Item.php [\#9](https://github.com/picqer/exact-php-client/pull/9) ([eMaurits](https://github.com/eMaurits))
- Update SalesInvoiceLine.php [\#8](https://github.com/picqer/exact-php-client/pull/8) ([eMaurits](https://github.com/eMaurits))
- Update SalesInvoice.php [\#7](https://github.com/picqer/exact-php-client/pull/7) ([eMaurits](https://github.com/eMaurits))
- Create Transactions.php [\#6](https://github.com/picqer/exact-php-client/pull/6) ([eMaurits](https://github.com/eMaurits))

## [v1.0.5](https://github.com/picqer/exact-php-client/tree/v1.0.5) (2015-07-22)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.4...v1.0.5)

**Merged pull requests:**

- Added support for more stuff [\#4](https://github.com/picqer/exact-php-client/pull/4) ([sebastianberm](https://github.com/sebastianberm))

## [v1.0.4](https://github.com/picqer/exact-php-client/tree/v1.0.4) (2015-06-16)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.3...v1.0.4)

## [v1.0.3](https://github.com/picqer/exact-php-client/tree/v1.0.3) (2015-04-24)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.2...v1.0.3)

**Merged pull requests:**

- Update for PSR-4 [\#1](https://github.com/picqer/exact-php-client/pull/1) ([casperbakker](https://github.com/casperbakker))

## [v1.0.2](https://github.com/picqer/exact-php-client/tree/v1.0.2) (2015-04-24)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.1...v1.0.2)

## [v1.0.1](https://github.com/picqer/exact-php-client/tree/v1.0.1) (2015-03-04)
[Full Changelog](https://github.com/picqer/exact-php-client/compare/v1.0.0...v1.0.1)

## [v1.0.0](https://github.com/picqer/exact-php-client/tree/v1.0.0) (2014-11-04)


\* *This Change Log was automatically generated by [github_changelog_generator](https://github.com/skywinder/Github-Changelog-Generator)*