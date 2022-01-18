<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingActivitiesAndExpense.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingActivitiesAndExpenses
 *
 * @property string $ID ID of activity or expense
 * @property string $Description Description of activity or expense
 * @property string $ParentDescription Description of its parent
 */
class TimeAndBillingActivitiesAndExpense extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/TimeAndBillingActivitiesAndExpenses';
}
