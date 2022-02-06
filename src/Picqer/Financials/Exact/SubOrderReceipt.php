<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubOrderReceipt.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingSubOrderReceipts
 *
 * @property string $ShopOrderReceiptStockTransactionId ShopOrderReceipt.StockTransactionId related to this SubOrderReceipt
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Creation date of this SubOrderReceipt
 * @property string $DraftStockTransactionID Serial or batch numbers are reserved prior to a POST to SubOrderReceipt. This DraftStockTransactionID represents the group of serial or batch numbers to be used in this transaction.
 * @property bool $HasReversibleQuantity Indicates if this SubOrderReceipt has a quantity eligible to be reversed via SubOrderReversals
 * @property int $IsBatch Does the SubOrderReceipt's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the SubOrderReceipt's item
 * @property int $IsSerial Does the SubOrderReceipt's item use serial numbers
 * @property string $Item Item of this SubOrderReceipt
 * @property string $ItemCode Code of this SubOrderReceipt's item
 * @property string $ItemDescription Description of this SubOrderReceipt's item
 * @property string $ItemPictureUrl Picture url of shop order item
 * @property string $MaterialIssueStockTransactionId MaterialIssue.StockTransactionId related to this SubOrderReceipt
 * @property string $ParentShopOrder Shop order issued to
 * @property string $ParentShopOrderMaterialPlan Shop order material plan issued to
 * @property int $ParentShopOrderNumber Number of shop order issued to
 * @property float $Quantity Quantity of this SubOrderReceipt
 * @property string $SubShopOrder Shop order issued from
 * @property int $SubShopOrderNumber Number of shop order issued from
 * @property string $TransactionDate Effective date of this SubOrderReceipt
 * @property string $Unit Unit of measurement abbreviation of this SubOrderReceipt's item
 * @property string $UnitDescription Unit of measurement of this SubOrderReceipt's item
 * @property string $Warehouse ID of warehouse SubOrderReceipt
 * @property string $WarehouseCode Code of warehouse SubOrderReceipt
 * @property string $WarehouseDescription Description of warehouse SubOrderReceipt
 */
class SubOrderReceipt extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ShopOrderReceiptStockTransactionId';

    protected $fillable = [
        'ShopOrderReceiptStockTransactionId',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
        'DraftStockTransactionID',
        'HasReversibleQuantity',
        'IsBatch',
        'IsFractionAllowedItem',
        'IsSerial',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemPictureUrl',
        'MaterialIssueStockTransactionId',
        'ParentShopOrder',
        'ParentShopOrderMaterialPlan',
        'ParentShopOrderNumber',
        'Quantity',
        'SubShopOrder',
        'SubShopOrderNumber',
        'TransactionDate',
        'Unit',
        'UnitDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'manufacturing/SubOrderReceipts';
}
