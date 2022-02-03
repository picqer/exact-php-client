<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingItemDetailsByID.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingItemDetailsByID
 *
 * @property string $ID Primary key
 * @property string $Code The code of the item used in time and billing projects
 * @property string $Description The description of the item used in time and billing projects
 * @property bool $IsFractionAllowedItem A boolean field to indicated if this item's quantity is allowed to be used in fraction's, which changes the calculation of the total amount invoiced
 * @property bool $IsSalesItem A boolean field to indicated if this item is enabled to be used in a invoice proposal
 * @property string $SalesCurrency The code of the sales currency used in this item
 * @property float $SalesPrice Sales price of the item which is used when processing sales invoice
 */
class TimeAndBillingItemDetailsByID extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Description',
        'IsFractionAllowedItem',
        'IsSalesItem',
        'SalesCurrency',
        'SalesPrice',
    ];

    protected $url = 'read/project/TimeAndBillingItemDetailsByID';
}
