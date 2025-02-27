<?php

declare(strict_types=1);

namespace Picqer\Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact;
use Picqer\Tests\Support\MocksExactConnection;

class QueryParamTest extends TestCase
{
    use MocksExactConnection;

    /**
     * @dataProvider ModelsWithSupportQueryParams
     */
    public function testGetRequestHasCorrectlyFormattedQueryParam(string $classString, array $supportedParams): void
    {
        $mockHandler = $this->createMockHandler(new Response(200, [], json_encode((object) [])));
        $connection = $this->createMockConnection($mockHandler);
        $sut = new $classString($connection);
        $params = array_fill_keys($supportedParams, '00000000-0000-0000-0000-000000000000');

        $sut->get($params);

        $this->assertEquals(http_build_query($params), $mockHandler->getLastRequest()->getUri()->getQuery());
    }

    public function ModelsWithSupportQueryParams(): \Generator
    {
        yield Exact\RecentCostsByNumberOfWeeks::class => [
            Exact\RecentCostsByNumberOfWeeks::class,
            ['numberOfWeeks'],
        ];
        yield Exact\PayablesListByAccountAndAgeGroup::class => [
            Exact\PayablesListByAccountAndAgeGroup::class,
            ['accountId', 'ageGroup'],
        ];
        yield Exact\CostEntryRecentAccountsByProject::class => [
            Exact\CostEntryRecentAccountsByProject::class,
            ['projectId'],
        ];
        yield Exact\PreferredMailboxForOperation::class => [
            Exact\PreferredMailboxForOperation::class,
            ['operation'],
        ];
        yield Exact\HourTypesByDate::class => [
            Exact\HourTypesByDate::class,
            ['checkDate'],
        ];
        yield Exact\CostTypesByProjectAndDate::class => [
            Exact\CostTypesByProjectAndDate::class,
            ['projectId', 'checkDate'],
        ];
        yield Exact\ReceivablesListByAccountAndAgeGroup::class => [
            Exact\ReceivablesListByAccountAndAgeGroup::class,
            ['accountId', 'ageGroup'],
        ];
        yield Exact\ReceivablesListByAgeGroup::class => [
            Exact\ReceivablesListByAgeGroup::class,
            ['ageGroup'],
        ];
        yield Exact\DefaultAddressForAccount::class => [
            Exact\DefaultAddressForAccount::class,
            ['accountId', 'addressType'],
        ];
        yield Exact\HoursById::class => [
            Exact\HoursById::class,
            ['entryId'],
        ];
        yield Exact\ProjectWBSByProjectAndWBS::class => [
            Exact\ProjectWBSByProjectAndWBS::class,
            ['projectId', 'projectWBSId', 'webType'],
        ];
        yield Exact\HourEntryRecentActivitiesByProject::class => [
            Exact\HourEntryRecentActivitiesByProject::class,
            ['projectId'],
        ];
        yield Exact\OpportunityDocumentsCount::class => [
            Exact\OpportunityDocumentsCount::class,
            ['opportunityId', 'searchText'],
        ];
        yield Exact\CostEntryRecentCostTypesByProject::class => [
            Exact\CostEntryRecentCostTypesByProject::class,
            ['projectId'],
        ];
        yield Exact\TimeAndBillingEntryAccountsByProjectAndDate::class => [
            Exact\TimeAndBillingEntryAccountsByProjectAndDate::class,
            ['projectId', 'checkDate'],
        ];
        yield Exact\HourTypesByProjectAndDate::class => [
            Exact\HourTypesByProjectAndDate::class,
            ['projectId', 'checkDate'],
        ];
        yield Exact\AccountDocumentCount::class => [
            Exact\AccountDocumentCount::class,
            ['accountId', 'searchText', 'useFullTextSearch'],
        ];
        yield Exact\AgingReceivablesListByAgeGroup::class => [
            Exact\AgingReceivablesListByAgeGroup::class,
            ['ageGroup'],
        ];
        yield Exact\CostsByDate::class => [
            Exact\CostsByDate::class,
            ['checkDate'],
        ];
        yield Exact\RevenueListByYearAndStatus::class => [
            Exact\RevenueListByYearAndStatus::class,
            ['year', 'afterEntry'],
        ];
        yield Exact\AgingPayablesListByAgeGroup::class => [
            Exact\AgingPayablesListByAgeGroup::class,
            ['ageGroup'],
        ];
        yield Exact\HoursByDate::class => [
            Exact\HoursByDate::class,
            ['checkDate'],
        ];
        yield Exact\AccountDocument::class => [
            Exact\AccountDocument::class,
            ['accountId', 'searchText', 'useFullTextSearch'],
        ];
        yield Exact\PayablesListByAgeGroup::class => [
            Exact\PayablesListByAgeGroup::class,
            ['ageGroup'],
        ];
        yield Exact\AccountDocumentFolder::class => [
            Exact\AccountDocumentFolder::class,
            ['accountId'],
        ];
        yield Exact\HourEntryActivitiesByProject::class => [
            Exact\HourEntryActivitiesByProject::class,
            ['projectId'],
        ];
        yield Exact\TimeAndBillingEntryAccountsByDate::class => [
            Exact\TimeAndBillingEntryAccountsByDate::class,
            ['checkDate'],
        ];
        yield Exact\CostsById::class => [
            Exact\CostsById::class,
            ['entryId'],
        ];
        yield Exact\ReceivablesListByAccount::class => [
            Exact\ReceivablesListByAccount::class,
            ['accountId'],
        ];
        yield Exact\RevenueListByYear::class => [
            Exact\RevenueListByYear::class,
            ['year'],
        ];
        yield Exact\AgingOverviewByAccount::class => [
            Exact\AgingOverviewByAccount::class,
            ['accountId'],
        ];
        yield Exact\HourEntryRecentAccountsByProject::class => [
            Exact\HourEntryRecentAccountsByProject::class,
            ['projectId'],
        ];
        yield Exact\PayablesListByAccount::class => [
            Exact\PayablesListByAccount::class,
            ['accountId'],
        ];
        yield Exact\TimeAndBillingAccountDetailsByID::class => [
            Exact\TimeAndBillingAccountDetailsByID::class,
            ['accountId'],
        ];
        yield Exact\CostTypesByDate::class => [
            Exact\CostTypesByDate::class,
            ['checkDate'],
        ];
        yield Exact\HourEntryRecentHourTypesByProject::class => [
            Exact\HourEntryRecentHourTypesByProject::class,
            ['projectId'],
        ];
        yield Exact\OpportunityDocument::class => [
            Exact\OpportunityDocument::class,
            ['opportunityId', 'searchText'],
        ];
        yield Exact\TimeAndBillingEntryProjectsByDate::class => [
            Exact\TimeAndBillingEntryProjectsByDate::class,
            ['checkDate'],
        ];
        yield Exact\TimeAndBillingItemDetailsByID::class => [
            Exact\TimeAndBillingItemDetailsByID::class,
            ['itemId'],
        ];
        yield Exact\CostEntryExpensesByProject::class => [
            Exact\CostEntryExpensesByProject::class,
            ['projectId'],
        ];
        yield Exact\UserHasRights::class => [
            Exact\UserHasRights::class,
            ['endpoint', 'action'],
        ];
        yield Exact\TimeAndBillingEntryProjectsByAccountAndDate::class => [
            Exact\TimeAndBillingEntryProjectsByAccountAndDate::class,
            ['accountId', 'checkDate'],
        ];
        yield Exact\TimeAndBillingProjectDetailsByID::class => [
            Exact\TimeAndBillingProjectDetailsByID::class,
            ['projectId'],
        ];
        yield Exact\ItemDetailsByID::class => [
            Exact\ItemDetailsByID::class,
            ['itemId'],
        ];
        yield Exact\CostEntryRecentExpensesByProject::class => [
            Exact\CostEntryRecentExpensesByProject::class,
            ['projectId'],
        ];
    }
}
