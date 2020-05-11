<?php

namespace Picqer\Financials\Exact;

/**
 * Class MaterialReversal.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingMaterialReversals
 *
 * @property string $ReversalStockTransactionId ID of stock transaction related to this material issue
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Date this reversal was created
 * @property bool $IsBackflush Boolean indicating if this reversal was the result of shop order backflushing, processed during a ShopOrderReversal
 * @property int $IsBatch Does the issue reversal's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the material reversal's item
 * @property int $IsSerial Does the issue reversal's item use serial numbers
 * @property string $Item Item reversed
 * @property string $ItemCode Code of item reversed
 * @property string $ItemDescription Description of item reversed
 * @property string $ItemPictureUrl Picture url of item issued
 * @property string $Note Notes logged with this reversal
 * @property string $OriginalStockTransactionId ID of the original stock transaction, which was reversed
 * @property float $Quantity Quantity of this reversal
 * @property string $ShopOrder ID of shop order reversed from
 * @property string $ShopOrderMaterialPlan ID of shop order material plan
 * @property int $ShopOrderNumber Number of shop order reversed from
 * @property string $StorageLocation ID of storage location reversed to
 * @property string $StorageLocationCode Code of storage location reversed to
 * @property string $StorageLocationDescription Description of storage location reversed to
 * @property string $TransactionDate Effective date of this reversal
 * @property string $Unit Unit of measurement abbreviation of item reversed
 * @property string $UnitDescription Unit of measurement of item reversed
 * @property string $Warehouse ID of warehouse reversed to
 * @property string $WarehouseCode Code of warehouse reversed to
 * @property string $WarehouseDescription Description of warehouse reversed to
 */
class MaterialReversal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'ItemPictureUrl',
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
        'WarehouseDescription',
    ];

    protected $url = 'manufacturing/MaterialReversals';
}
