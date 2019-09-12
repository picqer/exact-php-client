<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingActivitiesAndExpense
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingActivitiesAndExpenses
 *
 * @property string $ID Primary key
 * @property string $Description Description
 * @property string $ParentDescription Description of Parent
 */
class TimeAndBillingActivitiesAndExpense extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/TimeAndBillingActivitiesAndExpenses';
}
