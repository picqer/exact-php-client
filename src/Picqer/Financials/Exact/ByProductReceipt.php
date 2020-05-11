<?php

namespace Picqer\Financials\Exact;

/**
 * Class ByProductReceipt.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingByProductReceipts
 *
 * @property string $StockTransactionId ID of stock transaction related to this by-product finish
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Date this by-product finish was created
 * @property string $DraftStockTransactionID Serial or batch numbers are reserved prior to a POST to ByProductReceipts. This DraftStockTransactionID represents the group of serial or batch numbers to be used in this transaction.
 * @property bool $HasReversibleQuantity Indicates if this ByProductReceipt has a quantity eligible to be reversed via ByProductReversals
 * @property bool $IsBackflush Boolean indicating if this by-product finish was the result of shop order backflushing
 * @property int $IsBatch Does the ByProductReceipt's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the ByProductReceipt's item
 * @property int $IsSerial Does the ByProductReceipt's item use serial numbers
 * @property string $Item ID of by-product item
 * @property string $ItemCode Code of by-product item
 * @property string $ItemDescription Description of by-product item
 * @property string $ItemPictureUrl Picture url of by-product item
 * @property float $Quantity Quantity of this by-product finish
 * @property string $ShopOrder ID of shop order, which produced the by-product
 * @property string $ShopOrderMaterialPlan ID of the shop order material plan for this by-product
 * @property int $ShopOrderNumber Number of shop order, which produced the by-product
 * @property string $StorageLocation ID of storage location finished to
 * @property string $StorageLocationCode Code of storage location finished to
 * @property string $StorageLocationDescription Description of storage location finished to
 * @property string $TransactionDate Effective date of this by-product finish
 * @property string $Unit Unit of measurement abbreviation of by-product item
 * @property string $UnitDescription Unit of measurement of by-product item
 * @property string $Warehouse ID of warehouse finished to
 * @property string $WarehouseCode Code of warehouse finished to
 * @property string $WarehouseDescription Description of warehouse finished to
 */
class ByProductReceipt extends Model
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
        'IsBackflush',
        'IsBatch',
        'IsFractionAllowedItem',
        'IsSerial',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemPictureUrl',
        'Quantity',
        'ShopOrder',
        'ShopOrderMaterialPlan',
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

    protected $url = 'manufacturing/ByProductReceipts';
}
