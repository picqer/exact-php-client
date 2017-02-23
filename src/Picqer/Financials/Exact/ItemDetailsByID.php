<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ItemDetailsByID
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsItemDetailsByID
 * 
 * @property Guid $ID Primary key
 * @property String $Code Item code
 * @property String $Description Description of the item
 * @property Boolean $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property Boolean $IsSalesItem Indicates if the item can be sold
 * @property String $SalesCurrency Currency of the sales price
 * @property Double $SalesPrice Sales price of the item
 */
class ItemDetailsByID extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'itemId';

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'IsFractionAllowedItem',
        'IsSalesItem',
        'SalesCurrency',
        'SalesPrice'
    ];

    protected $url = 'read/logistics/ItemDetailsByID';

}
