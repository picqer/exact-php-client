<?php 

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionLineType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionLineTypes
 * 
 * @property Int16 $ID Primary key
 * @property String $Description Description
 */
class SubscriptionLineType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Description'
    ];

    protected $url = 'subscription/SubscriptionLineTypes';

}
