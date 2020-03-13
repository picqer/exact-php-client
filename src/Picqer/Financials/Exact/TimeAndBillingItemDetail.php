<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingItemDetail.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingItemDetails
 *
 * @property string $ID Primary key
 * @property string $Code Item code
 * @property string $Description Description of the item code
 * @property bool $IsFractionAllowedItem Indicates if fractions are allowed for quantities of this item
 * @property bool $IsSalesItem Indicates if the item can be sold
 * @property string $SalesCurrency Sales currency code
 * @property float $SalesPrice Sales price
 */
class TimeAndBillingItemDetail extends Model
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

    protected $url = 'read/project/TimeAndBillingItemDetails';
}
