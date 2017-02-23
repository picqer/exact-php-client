<?php namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderReversal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderReversals
 * 
 * @property Guid $ReversalStockTransactionId ID of stock transaction related to this ShopOrderReversal
 * @property Guid $CreatedBy ID of creating user
 * @property String $CreatedByFullName Name of the creating user
 * @property DateTime $CreatedDate Date of this reversal
 * @property Guid $Item Item reversed
 * @property String $ItemCode Code of item reversed
 * @property String $ItemDescription Description of item reversed
 * @property String $Note Notes associated with this reversal
 * @property Guid $OriginalStockTransactionId ID of the original stock transaction, which was reversed
 * @property Double $Quantity Quantity reversed
 * @property Guid $ShopOrder Shop order being reversed
 * @property Int32 $ShopOrderNumber Number of shop order being reversed
 * @property Guid $StorageLocation ID of storage location reversed from
 * @property String $StorageLocationCode Code of storage location reversed from
 * @property String $StorageLocationDescription Description of storage location reversed from
 * @property DateTime $TransactionDate Effective date of this ShopOrderReversal
 * @property String $Unit Unit of measurement abbreviation of item reversed
 * @property String $UnitDescription Unit of measurement of item reversed
 * @property Guid $Warehouse ID of warehouse reversed from
 * @property String $WarehouseCode Code of warehouse reversed from
 * @property String $WarehouseDescription Description of warehouse reversed from
 */
class ShopOrderReversal extends Model
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
        'Item',
        'ItemCode',
        'ItemDescription',
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
        'WarehouseDescription'
    ];

    protected $url = 'manufacturing/ShopOrderReversals';

}
