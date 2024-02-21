<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryRecentActivitiesAndExpense.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryRecentActivitiesAndExpenses
 *
 * @property string $ID Primary key
 * @property string $DateLastUsed Date last used
 * @property string $DefaultItem ID of the defaultItem
 * @property string $DefaultItemCode Item code of the defaultItem
 * @property string $DefaultItemDescription Description of the defaultItem
 * @property string $Description Description
 * @property string $ParentDescription Description of Parent
 */
class TimeAndBillingEntryRecentActivitiesAndExpense extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'DateLastUsed',
        'DefaultItem',
        'DefaultItemCode',
        'DefaultItemDescription',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/TimeAndBillingEntryRecentActivitiesAndExpenses';
}
