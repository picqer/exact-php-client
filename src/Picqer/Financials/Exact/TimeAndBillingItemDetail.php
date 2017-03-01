<?php 

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingItemDetail
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingItemDetails
 * 
 * @property Guid $ID Primary key
 * @property String $Code Item code
 * @property String $Description Description of the item code
 * @property Boolean $IsFractionAllowedItem Indicates if fractions are allowed for quantities of this item
 * @property Boolean $IsSalesItem Indicates if the item can be sold
 * @property String $SalesCurrency Sales currency code
 * @property Double $SalesPrice Sales price
 */
class TimeAndBillingItemDetail extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'IsFractionAllowedItem',
        'IsSalesItem',
        'SalesCurrency',
        'SalesPrice'
    ];

    protected $url = 'read/project/TimeAndBillingItemDetails';

}
