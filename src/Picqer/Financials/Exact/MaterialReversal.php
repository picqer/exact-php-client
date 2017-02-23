<?php namespace Picqer\Financials\Exact;

/**
 * Class MaterialReversal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingMaterialReversals
 * 
 * @property Guid $ReversalStockTransactionId ID of stock transaction related to this material issue
 * @property Guid $CreatedBy ID of creating user
 * @property String $CreatedByFullName Name of the creating user
 * @property DateTime $CreatedDate Date this reversal was created
 * @property Boolean $IsBackflush Boolean indicating if this reversal was the result of shop order backflushing, processed during a ShopOrderReversal
 * @property Byte $IsBatch Does the issue reversal's item use batch numbers
 * @property Byte $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the material reversal's item
 * @property Byte $IsSerial Does the issue reversal's item use serial numbers
 * @property Guid $Item Item reversed
 * @property String $ItemCode Code of item reversed
 * @property String $ItemDescription Description of item reversed
 * @property String $Note Notes logged with this reversal
 * @property Guid $OriginalStockTransactionId ID of the original stock transaction, which was reversed
 * @property Double $Quantity Quantity of this reversal
 * @property Guid $ShopOrder ID of shop order reversed from
 * @property Guid $ShopOrderMaterialPlan ID of shop order material plan
 * @property Int32 $ShopOrderNumber Number of shop order reversed from
 * @property Guid $StorageLocation ID of storage location reversed to
 * @property String $StorageLocationCode Code of storage location reversed to
 * @property String $StorageLocationDescription Description of storage location reversed to
 * @property DateTime $TransactionDate Effective date of this reversal
 * @property String $Unit Unit of measurement abbreviation of item reversed
 * @property String $UnitDescription Unit of measurement of item reversed
 * @property Guid $Warehouse ID of warehouse reversed to
 * @property String $WarehouseCode Code of warehouse reversed to
 * @property String $WarehouseDescription Description of warehouse reversed to
 */
class MaterialReversal extends Model
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
        'IsBatch',
        'IsFractionAllowedItem',
        'IsSerial',
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

    protected $url = 'manufacturing/MaterialReversals';

}
