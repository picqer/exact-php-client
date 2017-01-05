<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingAccountDetail
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingAccountDetails
 * 
 * @property Guid $ID Primary key
 * @property String $Name Name
 */
class TimeAndBillingAccountDetail extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Name'
    ];

    protected $url = 'read/project/TimeAndBillingAccountDetails';

}
