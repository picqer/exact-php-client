<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ShopOrderReceipt
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingShopOrderReceipts
 * 
 * @property Guid $StockTransactionId ID of stock transaction of this ShopOrderReceipt
 * @property Guid $CreatedBy ID of creating user
 * @property String $CreatedByFullName Name of the creating user
 * @property DateTime $CreatedDate Date of this ShopOrderReceipt
 * @property Guid $DraftStockTransactionID Serial or batch numbers are reserved prior to a POST to ShopOrderReceipts. This DraftStockTransactionID represents the group of serial or batch numbers to be used in this transaction.
 * @property Boolean $HasReversibleQuantity Indicates if this ShopOrderReceipt has a quantity eligible to be reversed via ShopOrderReversals
 * @property Byte $IsBatch Does the shop order receipt's item use batch numbers
 * @property Byte $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the shop order receipt's item
 * @property Boolean $IsIssueToParent Boolean indicating if this ShopOrderReceipt was part of an SubOrderReceipt
 * @property Byte $IsSerial Does the shop order receipt's item use serial numbers
 * @property Guid $Item Item finished
 * @property String $ItemCode Code of item finished
 * @property String $ItemDescription Description of item finished
 * @property Guid $ParentShopOrder Parent shop order if this ShopOrderReceipt is part of a SubOrderReceipt
 * @property Int32 $ParentShopOrderNumber Parent shop order number if this ShopOrderReceipt is part of a SubOrderReceipt
 * @property Double $Quantity Quantity of this ShopOrderReceipt
 * @property Guid $RelatedStockTransaction If this transaction was part of a SubOrderReceipt, this ID is the related MaterialIssue.StockTransactionID.
 * @property Guid $ShopOrder Shop order finished
 * @property Int32 $ShopOrderNumber Number of shop order finished
 * @property Guid $StorageLocation ID of storage location finished to
 * @property String $StorageLocationCode Code of storage location finished to
 * @property String $StorageLocationDescription Description of storage location finished to
 * @property DateTime $TransactionDate Effective date of this ShopOrderReceipt
 * @property String $Unit Unit of measurement abbreviation of item finished
 * @property String $UnitDescription Unit of measurement of item finished
 * @property Guid $Warehouse ID of warehouse finished to
 * @property String $WarehouseCode Code of warehouse finished to
 * @property String $WarehouseDescription Description of warehouse finished to
 */
class ShopOrderReceipt extends Model
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
        'IsBatch',
        'IsFractionAllowedItem',
        'IsIssueToParent',
        'IsSerial',
        'Item',
        'ItemCode',
        'ItemDescription',
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
        'WarehouseDescription'
    ];

    protected $url = 'manufacturing/ShopOrderReceipts';

}
