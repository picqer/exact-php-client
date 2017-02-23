<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingActivitiesAndExpense
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingActivitiesAndExpenses
 * 
 * @property Guid $ID Primary key
 * @property String $Description Description
 * @property String $ParentDescription Description of Parent
 */
class TimeAndBillingActivitiesAndExpense extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription'
    ];

    protected $url = 'read/project/TimeAndBillingActivitiesAndExpenses';

}