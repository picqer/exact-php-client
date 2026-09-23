# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

`picqer/exact-php-client` is a PHP library (PHP >= 7.4, Guzzle 7; see `composer.json` for the minimum version) that acts as an API client for the Exact Online REST API. It is open source and widely used, so avoid breaking changes to public behavior. Entity classes mirror Exact's own naming and conventions, so the Exact API reference is the source of truth for endpoints and field names.

- Resource overview: https://start.exactonline.nl/docs/HlpRestAPIResources.aspx?SourceAction=10
- Resource detail pages: `https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name={Service}{Resource}` (for example, `LogisticsItems` or `SyncLogisticsItems`). Each entity's `@see` tag links to its page.

## Commands

```bash
composer install
vendor/bin/phpunit                                   # full test suite
vendor/bin/phpunit tests/ModelTest.php               # single file
vendor/bin/phpunit --filter testCanFindModel         # single test
vendor/bin/phpstan                                   # static analysis (level 5, uses phpstan-baseline.neon)
vendor/bin/phpstan --generate-baseline phpstan-baseline.neon   # regenerate baseline
```

CI runs phpunit on PHP 7.4 through 8.5 on pushes and pull requests, plus a `--prefer-lowest` run on PHP 7.4 and 8.5 so the minimum dependency versions are tested. phpstan runs on PHP 7.4 for pull requests. The `PHP x.y` jobs and `Static analysis` are required status checks on `main`, so don't rename them without updating the branch protection. Keep code compatible with PHP 7.4: no enums, readonly properties, constructor promotion, union types or `never`/`mixed` return types (use a `@return never` docblock instead). StyleCI applies the `recommended` preset plus `concat_with_spaces` and `not_operator_with_successor_space` (`! $foo`).

## Releases

This library is widely used, so follow semver strictly:
- **Patch:** only fixes that users won't notice except that something broken now works.
- **Minor:** anything that changes observable behaviour (different exceptions, errors that used to be swallowed) or raises a dependency minimum. List these under "Behaviour changes" in the release notes.

Releases are GitHub releases with a `vX.Y.Z` tag on `main`. Packagist picks them up automatically. `CHANGELOG.md` is historical and no longer maintained; the release notes are the changelog.

## Architecture

All code lives in the `Picqer\Financials\Exact` namespace under `src/Picqer/Financials/Exact/`.

- **`Connection`** handles OAuth2 (authorization code, access and refresh tokens, and lock/unlock/update callbacks around token refresh), request building through Guzzle, response parsing (JSON `d`/`results` unwrapping, `__next` pagination via `nextUrl`, and XML for the XML upload/download endpoints), division handling, file downloads (`downloadFile()`), and rate-limit headers (`waitOnMinutelyRateLimitHit`).
  - URLs are built as `{apiUrl}/{division}/{endpoint}`. A `{division}` placeholder in the endpoint is filled in instead (beta endpoints). Absolute `http(s)://` URLs are used as is. Only `SystemUser` and `Me` skip the division (see `requiresDivisionInRequestUrl`).
  - Every error becomes an `ApiException`. For HTTP errors the code is the status code; for connection errors it is `0`.
  - `Connection::$nextUrl` is shared state that every request overwrites. Code that paginates must copy it right after its own request (see `Findable::collectionFromResultAsGenerator`) and must never read it later.
- **`Model`** is the abstract base class for all entities. It stores attributes, filters them through `$fillable`, and serializes to JSON. Magic `__get` lazy-loads `__deferred` navigation properties by mapping the property name to a class: the trailing `s` is stripped (for example, `SalesInvoiceLines` maps to `SalesInvoiceLine`), so those entity class names must follow that convention. If the load fails, the `ApiException` is thrown. If no matching class exists, the raw `__deferred` array is returned. Array values assigned via `__set` go into `$deferred` and are only sent on insert (`json(0, true)`).
- **Traits** add capabilities to each entity:
  - `Query\Findable` provides `find`, `findWithSelect`, `findId`, `filter`, `first`, `get`, `getResultSet`, the `*AsGenerator` variants, and OData `$filter`/`$expand`/`$select` support. `Query\Resultset` handles paginated fetching.
  - `Persistance\Storable` provides `save` (insert or update based on `exists()`), `insert`, `update`, and `delete`. Updates and deletes address records as `{url}(guid'{primaryKey}')`.
  - `Persistance\Downloadable` downloads binary content from an entity's `getDownloadUrl()` through `Connection::downloadFile()`.
  - `Webhook\Authenticatable` verifies incoming webhook signatures.

### Entities

There are about 470 entity files. Each file is a thin class containing:
- A docblock with `@see` pointing to the Exact API docs page and one `@property` per field. PHPStan relies on these properties.
- `protected $fillable = [...]`, which lists every field name exactly as Exact spells it.
- `protected $url`, the endpoint path relative to the division (for example, `'logistics/Items'`).
- `protected $primaryKey` when the key isn't `ID`.
- `use` of whichever traits the endpoint supports. Read-only endpoints use only `Findable`.

Entities are largely generated from Exact's online documentation (see recent commits such as "Update existing entities from documentation ... using generator"). The generator is not in this repo. When adding or updating entities, match the existing generated format. Properties that reference classes Exact leaves undocumented are recorded in `phpstan-baseline.neon` instead of being fixed.

**Deprecated class names:** when an entity's name is wrong (usually a plural), the class is kept as an empty subclass of the correctly named class. It calls `trigger_error(..., E_USER_DEPRECATED)` at file load and has a `@deprecated ... to be removed in 5.0` tag (see `Units.php`). Such files must also be added to the `$deprecated` list in `tests/EntityTest.php`.

## Exact Online API notes

The API is OData v2 over JSON. Responses are wrapped in `d` (collections in `d.results`, with the next-page link in `d.__next`), and that wrapping is what `Connection::parseResponse` unwraps.

**Reading a resource detail page:** the properties table has the columns Name, Mandatory, Value/Type (OData `Edm.*`), Webhook, Filter and Description. A key icon marks the primary key, which maps to `$primaryKey`. When it isn't `ID`, the entity must override `$primaryKey`. The Filter column shows which fields `$filter` supports. Each page also has a "Good to know" section with endpoint-specific rules; read it before changing an entity.

**Divisions:** almost every URI is `/api/v1/{division}/{service}/{Resource}`. The exception is `/api/v1/current/Me`, which is why `Connection::requiresDivisionInRequestUrl` skips the division for `Me` and `SystemUser`. When no division is set, the client uses `Me.CurrentDivision`. You can list divisions via `system/Divisions` (the user's divisions) or `system/AllDivisions` (all divisions on the license). Queries can't span divisions.

**Page sizes:** regular endpoints return 60 records per page. `bulk/` and `sync/` endpoints return 1000 per page, and Exact recommends sync endpoints wherever they exist. The library currently has about 60 sync entities and 21 bulk entities.
- **Bulk** (`bulk/...`): `$select` is mandatory and must name one or more properties.
- **Sync** (`sync/...`): these endpoints use row versioning. `Timestamp` (`Edm.Int64`) is a rowversion, not a date. Start with `$filter=Timestamp gt 1`, store the highest `Timestamp` you've seen, and continue from there. `$select=*` isn't supported. `sync/Deleted` reports deletions. `ID` stays the stable identifier.
- **Beta** endpoints use `/api/v1/beta/{division}/...` and aren't meant for production. Their entities have `$url = 'beta/{division}/...'`, and `Connection` fills in the placeholder.

**Writes:**
- Some header resources require their lines in the same POST (deep insert). For example, `SalesInvoices` requires `SalesInvoiceLines` on POST but not on PUT. In the library, array values assigned to an entity go into `$deferred` and are only serialized on insert (`json(0, true)`).
- `Prefer: return=representation` makes POST and PUT return the saved record, which `save()` then uses to refill the model.
- Updates and deletes address records by key (`(guid'…')`).

**Language:** send the header `CustomDescriptionLanguage: NL|FR-BE|NL-BE|…` for language-sensitive descriptions. The `$headers` argument of `filter()`/`first()` can carry it.

**Errors:** Exact sometimes requires `$select` or `$top=1` on a query (error 400, "Please add a $select or a $top=1 statement"). This is why `find()` always sends `$top=1`.

**Webhooks:** subscriptions go through the `WebhookSubscription` entity (`webhooks/WebhookSubscriptions`). `IsInstant` is only allowed for the GoodsDeliveries topic. Incoming payloads look like `{"Content":…,"HashCode":"…"}`, and `HashCode` is the uppercase HMAC-SHA256 of `Content` with the webhook secret (see `Webhook\Authenticatable`).

**Rate limits and tokens:** these come from Exact's knowledge base, which is JavaScript-rendered and can't be fetched directly. Treat them as indicative.
- Limits apply per division (company) per app. The defaults are about 60 calls per minute and 5000 per day, but they can vary by agreement. Always read the `X-RateLimit-*` and `X-RateLimit-Minutely-*` headers. Exceeding a limit returns HTTP 429.
- The access token is valid for about 10 minutes, and a new one may only be requested after 570 seconds. `tokenHasExpired()` refreshes 10 seconds before expiry, which stays within that rule.
- Refresh tokens rotate: every refresh invalidates the old one. Consumers must persist the new token immediately (via `setTokenUpdateCallback`) and serialize concurrent refreshes (via the lock and unlock callbacks). Otherwise they get locked out.

## Tests

- `tests/EntityTest.php` reflects over every file in the entity directory. Each file must be an instantiable `Model` subclass in the correct namespace with `$fillable` and `$url` properties. Non-entity files must be added to its `$notAnEntity` list.
- Connection and model tests use the `Tests\Support\MocksExactConnection` trait. It injects a Guzzle `MockHandler` into `Connection::setClient()`, records the sent requests (`sentRequests()`), and can load responses from `tests/fixtures/*.json`. No real Exact credentials are needed. Code under test must go through the connection's client; anything that creates its own Guzzle client makes real network calls in tests.
- The other test files are organised by area: `StorableTest`, `FindableTest`, `AuthenticationTest`, `ErrorHandlingTest`, `RateLimitTest`, `DownloadableTest`, `XmlTest` and `WebhookTest`. Tests whose comment says "Documents current behaviour" pin down odd but existing behaviour. Changing that behaviour is a deliberate decision (see Releases).
- Response shapes in mocks: collections are `{"d": {"results": [...], "__next": "…"}}`, and `$top` queries such as `find()` and `findId()` return `{"d": [...]}`. When a `results` array has exactly one item, `Connection::get()` returns that item instead of a list, unless the url is a next-page url.
- When fixing a bug, first write a test that fails, then fix it.
