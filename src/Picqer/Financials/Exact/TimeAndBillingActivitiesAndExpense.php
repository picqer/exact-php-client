<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingActivitiesAndExpense.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingActivitiesAndExpenses
 *
 * @property string $ID ID of activity or expense
 * @property string $DefaultItem ID of the defaultItem
 * @property string $DefaultItemCode Item code of the defaultItem
 * @property string $DefaultItemDescription Description of the defaultItem
 * @property string $Description Description of activity or expense
 * @property string $ParentDescription Description of its parent
 */
class TimeAndBillingActivitiesAndExpense extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'DefaultItem',
        'DefaultItemCode',
        'DefaultItemDescription',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/TimeAndBillingActivitiesAndExpenses';
}
