<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryRecentActivitiesAndExpense.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryRecentActivitiesAndExpenses
 *
 * @property string $ID Primary key
 * @property string $DateLastUsed Date last used
 * @property string $Description Description
 * @property string $ParentDescription Description of Parent
 */
class TimeAndBillingEntryRecentActivitiesAndExpense extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'DateLastUsed',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/TimeAndBillingEntryRecentActivitiesAndExpenses';
}
