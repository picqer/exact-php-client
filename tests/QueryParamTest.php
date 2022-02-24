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

    public function ModelsWithSupportQueryParams(): array
    {
        return [
            Exact\RecentCostsByNumberOfWeeks::class => [
                Exact\RecentCostsByNumberOfWeeks::class,
                ['numberOfWeeks'],
            ],
            Exact\PayablesListByAccountAndAgeGroup::class => [
                Exact\PayablesListByAccountAndAgeGroup::class,
                ['accountId', 'ageGroup'],
            ],
            Exact\CostEntryRecentAccountsByProject::class => [
                Exact\CostEntryRecentAccountsByProject::class,
                ['projectId'],
            ],
            Exact\PreferredMailboxForOperation::class => [
                Exact\PreferredMailboxForOperation::class,
                ['operation'],
            ],
            Exact\HourTypesByDate::class => [
                Exact\HourTypesByDate::class,
                ['checkDate'],
            ],
            Exact\CostTypesByProjectAndDate::class => [
                Exact\CostTypesByProjectAndDate::class,
                ['projectId', 'checkDate'],
            ],
            Exact\ReceivablesListByAccountAndAgeGroup::class => [
                Exact\ReceivablesListByAccountAndAgeGroup::class,
                ['accountId', 'ageGroup'],
            ],
            Exact\ReceivablesListByAgeGroup::class => [
                Exact\ReceivablesListByAgeGroup::class,
                ['ageGroup'],
            ],
            Exact\DefaultAddressForAccount::class => [
                Exact\DefaultAddressForAccount::class,
                ['accountId', 'addressType'],
            ],
            Exact\HoursById::class => [
                Exact\HoursById::class,
                ['entryId'],
            ],
            Exact\ProjectWBSByProjectAndWBS::class => [
                Exact\ProjectWBSByProjectAndWBS::class,
                ['projectId', 'projectWBSId', 'webType'],
            ],
            Exact\HourEntryRecentActivitiesByProject::class => [
                Exact\HourEntryRecentActivitiesByProject::class,
                ['projectId'],
            ],
            Exact\OpportunityDocumentsCount::class => [
                Exact\OpportunityDocumentsCount::class,
                ['opportunityId', 'searchText'],
            ],
            Exact\CostEntryRecentCostTypesByProject::class => [
                Exact\CostEntryRecentCostTypesByProject::class,
                ['projectId'],
            ],
            Exact\TimeAndBillingEntryAccountsByProjectAndDate::class => [
                Exact\TimeAndBillingEntryAccountsByProjectAndDate::class,
                ['projectId', 'checkDate'],
            ],
            Exact\HourTypesByProjectAndDate::class => [
                Exact\HourTypesByProjectAndDate::class,
                ['projectId', 'checkDate'],
            ],
            Exact\AccountDocumentCount::class => [
                Exact\AccountDocumentCount::class,
                ['accountId', 'searchText', 'useFullTextSearch'],
            ],
            Exact\AgingReceivablesListByAgeGroup::class => [
                Exact\AgingReceivablesListByAgeGroup::class,
                ['ageGroup'],
            ],
            Exact\CostsByDate::class => [
                Exact\CostsByDate::class,
                ['checkDate'],
            ],
            Exact\RevenueListByYearAndStatus::class => [
                Exact\RevenueListByYearAndStatus::class,
                ['year', 'afterEntry'],
            ],
            Exact\AgingPayablesListByAgeGroup::class => [
                Exact\AgingPayablesListByAgeGroup::class,
                ['ageGroup'],
            ],
            Exact\HoursByDate::class => [
                Exact\HoursByDate::class,
                ['checkDate'],
            ],
            Exact\AccountDocument::class => [
                Exact\AccountDocument::class,
                ['accountId', 'searchText', 'useFullTextSearch'],
            ],
            Exact\PayablesListByAgeGroup::class => [
                Exact\PayablesListByAgeGroup::class,
                ['ageGroup'],
            ],
            Exact\AccountDocumentFolder::class => [
                Exact\AccountDocumentFolder::class,
                ['accountId'],
            ],
            Exact\HourEntryActivitiesByProject::class => [
                Exact\HourEntryActivitiesByProject::class,
                ['projectId'],
            ],
            Exact\TimeAndBillingEntryAccountsByDate::class => [
                Exact\TimeAndBillingEntryAccountsByDate::class,
                ['checkDate'],
            ],
            Exact\CostsById::class => [
                Exact\CostsById::class,
                ['entryId'],
            ],
            Exact\ReceivablesListByAccount::class => [
                Exact\ReceivablesListByAccount::class,
                ['accountId'],
            ],
            Exact\RevenueListByYear::class => [
                Exact\RevenueListByYear::class,
                ['year'],
            ],
            Exact\AgingOverviewByAccount::class => [
                Exact\AgingOverviewByAccount::class,
                ['accountId'],
            ],
            Exact\HourEntryRecentAccountsByProject::class => [
                Exact\HourEntryRecentAccountsByProject::class,
                ['projectId'],
            ],
            Exact\PayablesListByAccount::class => [
                Exact\PayablesListByAccount::class,
                ['accountId'],
            ],
            Exact\TimeAndBillingAccountDetailsByID::class => [
                Exact\TimeAndBillingAccountDetailsByID::class,
                ['accountId'],
            ],
            Exact\CostTypesByDate::class => [
                Exact\CostTypesByDate::class,
                ['checkDate'],
            ],
            Exact\HourEntryRecentHourTypesByProject::class => [
                Exact\HourEntryRecentHourTypesByProject::class,
                ['projectId'],
            ],
            Exact\OpportunityDocument::class => [
                Exact\OpportunityDocument::class,
                ['opportunityId', 'searchText'],
            ],
            Exact\TimeAndBillingEntryProjectsByDate::class => [
                Exact\TimeAndBillingEntryProjectsByDate::class,
                ['checkDate'],
            ],
            Exact\TimeAndBillingItemDetailsByID::class => [
                Exact\TimeAndBillingItemDetailsByID::class,
                ['itemId'],
            ],
            Exact\CostEntryExpensesByProject::class => [
                Exact\CostEntryExpensesByProject::class,
                ['projectId'],
            ],
            Exact\UserHasRights::class => [
                Exact\UserHasRights::class,
                ['endpoint', 'action'],
            ],
            Exact\TimeAndBillingEntryProjectsByAccountAndDate::class => [
                Exact\TimeAndBillingEntryProjectsByAccountAndDate::class,
                ['accountId', 'checkDate'],
            ],
            Exact\TimeAndBillingProjectDetailsByID::class => [
                Exact\TimeAndBillingProjectDetailsByID::class,
                ['projectId'],
            ],
            Exact\ItemDetailsByID::class => [
                Exact\ItemDetailsByID::class,
                ['itemId'],
            ],
            Exact\CostEntryRecentExpensesByProject::class => [
                Exact\CostEntryRecentExpensesByProject::class,
                ['projectId'],
            ],
        ];
    }
}
