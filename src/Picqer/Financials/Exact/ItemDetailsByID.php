<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemDetailsByID.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadLogisticsItemDetailsByID
 *
 * @property string $ID Primary key
 * @property string $Code Item code
 * @property string $Description Description of the item
 * @property bool $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property bool $IsSalesItem Indicates if the item can be sold
 * @property string $SalesCurrency Currency of the sales price
 * @property float $SalesPrice Sales price of the item
 */
class ItemDetailsByID extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'IsFractionAllowedItem',
        'IsSalesItem',
        'SalesCurrency',
        'SalesPrice',
    ];

    protected $url = 'read/logistics/ItemDetailsByID?itemId={Edm.Guid}';
}
