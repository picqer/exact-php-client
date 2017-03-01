<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ByProductReversal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingByProductReversals
 * 
 * @property Guid $ReversalStockTransactionId ID of stock transaction related to this ByProductReversal
 * @property Guid $CreatedBy ID of creating user
 * @property String $CreatedByFullName Name of the creating user
 * @property DateTime $CreatedDate Date of this reversal
 * @property Boolean $IsBackflush Boolean indicating if this reversal was the result of shop order backflushing, processed during a ShopOrderReversal
 * @property Guid $Item Item reversed
 * @property String $ItemCode Code of item reversed
 * @property String $ItemDescription Description of item reversed
 * @property String $Note Notes associated with this reversal
 * @property Guid $OriginalStockTransactionId ID of the original stock transaction, which was reversed
 * @property Double $Quantity Quantity reversed
 * @property Guid $ShopOrder Shop order being reversed to
 * @property Guid $ShopOrderMaterialPlan ID of shop order material plan
 * @property Int32 $ShopOrderNumber Number of shop order being reversed to
 * @property Guid $StorageLocation ID of storage location reversed from
 * @property String $StorageLocationCode Code of storage location reversed from
 * @property String $StorageLocationDescription Description of storage location reversed from
 * @property DateTime $TransactionDate Effective date of this ByProductReversal
 * @property String $Unit Unit of measurement abbreviation of item reversed
 * @property String $UnitDescription Unit of measurement of item reversed
 * @property Guid $Warehouse ID of warehouse reversed from
 * @property String $WarehouseCode Code of warehouse reversed from
 * @property String $WarehouseDescription Description of warehouse reversed from
 */
class ByProductReversal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'ReversalStockTransactionId';

    protected $fillable = [
        'ReversalStockTransactionId',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
        'IsBackflush',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Note',
        'OriginalStockTransactionId',
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

    protected $url = 'manufacturing/ByProductReversals';

}
