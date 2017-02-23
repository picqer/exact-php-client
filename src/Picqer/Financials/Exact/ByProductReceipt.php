<?php namespace Picqer\Financials\Exact;

/**
 * Class ByProductReceipt
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingByProductReceipts
 * 
 * @property Guid $StockTransactionId ID of stock transaction related to this by-product finish
 * @property Guid $CreatedBy ID of creating user
 * @property String $CreatedByFullName Name of the creating user
 * @property DateTime $CreatedDate Date this by-product finish was created
 * @property Guid $DraftStockTransactionID Serial or batch numbers are reserved prior to a POST to ByProductReceipts. This DraftStockTransactionID represents the group of serial or batch numbers to be used in this transaction.
 * @property Boolean $HasReversibleQuantity Indicates if this ByProductReceipt has a quantity eligible to be reversed via ByProductReversals
 * @property Boolean $IsBackflush Boolean indicating if this by-product finish was the result of shop order backflushing
 * @property Guid $Item ID of by-product item
 * @property String $ItemCode Code of by-product item
 * @property String $ItemDescription Description of by-product item
 * @property Double $Quantity Quantity of this by-product finish
 * @property Guid $ShopOrder ID of shop order, which produced the by-product
 * @property Guid $ShopOrderMaterialPlan ID of the shop order material plan for this by-product
 * @property Int32 $ShopOrderNumber Number of shop order, which produced the by-product
 * @property Guid $StorageLocation ID of storage location finished to
 * @property String $StorageLocationCode Code of storage location finished to
 * @property String $StorageLocationDescription Description of storage location finished to
 * @property DateTime $TransactionDate Effective date of this by-product finish
 * @property String $Unit Unit of measurement abbreviation of by-product item
 * @property String $UnitDescription Unit of measurement of by-product item
 * @property Guid $Warehouse ID of warehouse finished to
 * @property String $WarehouseCode Code of warehouse finished to
 * @property String $WarehouseDescription Description of warehouse finished to
 */
class ByProductReceipt extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'StockTransactionId';

    protected $fillable = [
        'StockTransactionId',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
        'DraftStockTransactionID',
        'HasReversibleQuantity',
        'IsBackflush',
        'Item',
        'ItemCode',
        'ItemDescription',
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
        'WarehouseDescription'
    ];

    protected $url = 'manufacturing/ByProductReceipts';

}
