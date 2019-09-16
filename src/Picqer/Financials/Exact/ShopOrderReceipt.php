<?php

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderReceipt.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderReceipts
 *
 * @property string $StockTransactionId ID of stock transaction of this ShopOrderReceipt
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Date of this ShopOrderReceipt
 * @property string $DraftStockTransactionID Serial or batch numbers are reserved prior to a POST to ShopOrderReceipts. This DraftStockTransactionID represents the group of serial or batch numbers to be used in this transaction.
 * @property bool $HasReversibleQuantity Indicates if this ShopOrderReceipt has a quantity eligible to be reversed via ShopOrderReversals
 * @property int $IsBatch Does the shop order receipt's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the shop order receipt's item
 * @property bool $IsIssueToParent Boolean indicating if this ShopOrderReceipt was part of an SubOrderReceipt
 * @property int $IsSerial Does the shop order receipt's item use serial numbers
 * @property string $Item Item finished
 * @property string $ItemCode Code of item finished
 * @property string $ItemDescription Description of item finished
 * @property string $ItemPictureUrl Picture url of shop order item
 * @property string $ParentShopOrder Parent shop order if this ShopOrderReceipt is part of a SubOrderReceipt
 * @property int $ParentShopOrderNumber Parent shop order number if this ShopOrderReceipt is part of a SubOrderReceipt
 * @property float $Quantity Quantity of this ShopOrderReceipt
 * @property string $RelatedStockTransaction If this transaction was part of a SubOrderReceipt, this ID is the related MaterialIssue.StockTransactionID.
 * @property string $ShopOrder Shop order finished
 * @property int $ShopOrderNumber Number of shop order finished
 * @property string $StorageLocation ID of storage location finished to
 * @property string $StorageLocationCode Code of storage location finished to
 * @property string $StorageLocationDescription Description of storage location finished to
 * @property string $TransactionDate Effective date of this ShopOrderReceipt
 * @property string $Unit Unit of measurement abbreviation of item finished
 * @property string $UnitDescription Unit of measurement of item finished
 * @property string $Warehouse ID of warehouse finished to
 * @property string $WarehouseCode Code of warehouse finished to
 * @property string $WarehouseDescription Description of warehouse finished to
 */
class ShopOrderReceipt extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'StockTransactionId';

    protected $fillable = [
        'StockTransactionId',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
        'DraftStockTransactionID',
        'HasReversibleQuantity',
        'IsBatch',
        'IsFractionAllowedItem',
        'IsIssueToParent',
        'IsSerial',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemPictureUrl',
        'ParentShopOrder',
        'ParentShopOrderNumber',
        'Quantity',
        'RelatedStockTransaction',
        'ShopOrder',
        'ShopOrderNumber',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'TransactionDate',
        'Unit',
        'UnitDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'manufacturing/ShopOrderReceipts';
}
