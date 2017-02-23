<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryRecentActivitiesAndExpense
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryRecentActivitiesAndExpenses
 * 
 * @property Guid $ID Primary key
 * @property DateTime $DateLastUsed Date last used
 * @property String $Description Description
 * @property String $ParentDescription Description of Parent
 */
class TimeAndBillingEntryRecentActivitiesAndExpense extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'DateLastUsed',
        'Description',
        'ParentDescription'
    ];

    protected $url = 'read/project/TimeAndBillingEntryRecentActivitiesAndExpenses';

}