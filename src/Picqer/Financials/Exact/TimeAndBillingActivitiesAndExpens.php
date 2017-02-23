<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingActivitiesAndExpens
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingActivitiesAndExpenses
 * 
 * @property Guid $ID Primary key
 * @property String $Description Description
 * @property String $ParentDescription Description of Parent
 */
class TimeAndBillingActivitiesAndExpens extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription'
    ];

    protected $url = 'read/project/TimeAndBillingActivitiesAndExpenses';

}
