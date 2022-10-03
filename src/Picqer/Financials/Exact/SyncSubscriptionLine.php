<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncSubscriptionLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncSubscriptionSubscriptionLines
 *
 * @property int $Timestamp Timestamp
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Costcenter Cost center linked to the subscription line
 * @property string $Costunit Cost unit linked to the subscription line
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Description Description of the subscription line
 * @property float $Discount Discount percentage of the subscription line
 * @property int $Division Code of division the subscription line is made
 * @property string $EntryID Entry ID referencing to the subscription
 * @property string $FromDate The date which the subscription line starts
 * @property string $ID Primary key
 * @property string $Item The item that is used by the subscription line for sales details. Reference to Item
 * @property string $ItemDescription Description of Item used by the subscription line
 * @property int $LineNumber Line number of the subscription line per subscription
 * @property int $LineType Reference to LineType endpoint
 * @property string $LineTypeDescription Description of LineType
 * @property string $Modified Date and time when the subscription line has been modified
 * @property float $NetPrice Net price in the currency of the transaction
 * @property string $Notes To add or retrieve additional information in the subscription line
 * @property float $Quantity Quantity of item used in the subscription line
 * @property int $SubscriptionNumber Subscription number of the subscription line per subscription
 * @property string $ToDate The date the subscription line ends
 * @property string $UnitCode The code of the unit used in the subscription line. E.g: kg, meter
 * @property string $UnitDescription Description of Unit used in the subscription line
 * @property float $UnitPrice Unit price in the currency of the transaction (price * unit factor)
 * @property float $VATAmountFC Vat Amount in the currency of the transaction
 * @property string $VATCode VAT code that is used in the subscription line
 * @property string $VATCodeDescription Description of VAT code that is used in the subscription line
 */
class SyncSubscriptionLine extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'AmountDC',
        'AmountFC',
        'Costcenter',
        'Costunit',
        'CustomField',
        'Description',
        'Discount',
        'Division',
        'EntryID',
        'FromDate',
        'ID',
        'Item',
        'ItemDescription',
        'LineNumber',
        'LineType',
        'LineTypeDescription',
        'Modified',
        'NetPrice',
        'Notes',
        'Quantity',
        'SubscriptionNumber',
        'ToDate',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountFC',
        'VATCode',
        'VATCodeDescription',
    ];

    protected $url = 'sync/Subscription/SubscriptionLines';
}
