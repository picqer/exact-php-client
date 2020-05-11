<?php

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderReversal.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderReversals
 *
 * @property string $ReversalStockTransactionId ID of stock transaction related to this ShopOrderReversal
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Date of this reversal
 * @property int $IsBatch Does the ShopOrderReversal's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the ShopOrderReversal's item
 * @property int $IsSerial Does the ShopOrderReversal's item use serial numbers
 * @property string $Item Item reversed
 * @property string $ItemCode Code of item reversed
 * @property string $ItemDescription Description of item reversed
 * @property string $ItemPictureUrl Picture url of shop order item
 * @property string $Note Notes associated with this reversal
 * @property string $OriginalStockTransactionId ID of the original stock transaction, which was reversed
 * @property float $Quantity Quantity reversed
 * @property string $ShopOrder Shop order being reversed
 * @property int $ShopOrderNumber Number of shop order being reversed
 * @property string $StorageLocation ID of storage location reversed from
 * @property string $StorageLocationCode Code of storage location reversed from
 * @property string $StorageLocationDescription Description of storage location reversed from
 * @property string $TransactionDate Effective date of this ShopOrderReversal
 * @property string $Unit Unit of measurement abbreviation of item reversed
 * @property string $UnitDescription Unit of measurement of item reversed
 * @property string $Warehouse ID of warehouse reversed from
 * @property string $WarehouseCode Code of warehouse reversed from
 * @property string $WarehouseDescription Description of warehouse reversed from
 */
class ShopOrderReversal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ReversalStockTransactionId';

    protected $fillable = [
        'ReversalStockTransactionId',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
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

    protected $url = 'manufacturing/ShopOrderReversals';
}
