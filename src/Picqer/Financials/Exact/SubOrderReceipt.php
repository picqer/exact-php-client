<?php namespace Picqer\Financials\Exact;

/**
 * Class SubOrderReceipt
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingSubOrderReceipts
 * 
 * @property Guid $ShopOrderReceiptStockTransactionId ShopOrderReceipt.StockTransactionId related to this SubOrderReceipt
 * @property Guid $CreatedBy ID of creating user
 * @property String $CreatedByFullName Name of the creating user
 * @property DateTime $CreatedDate Creation date of this SubOrderReceipt
 * @property Guid $DraftStockTransactionID Serial or batch numbers are reserved prior to a POST to SubOrderReceipt. This DraftStockTransactionID represents the group of serial or batch numbers to be used in this transaction.
 * @property Boolean $HasReversibleQuantity Indicates if this SubOrderReceipt has a quantity eligible to be reversed via SubOrderReversals
 * @property Guid $Item Item of this SubOrderReceipt
 * @property String $ItemCode Code of this SubOrderReceipt's item
 * @property String $ItemDescription Description of this SubOrderReceipt's item
 * @property Guid $MaterialIssueStockTransactionId MaterialIssue.StockTransactionId related to this SubOrderReceipt
 * @property Guid $ParentShopOrder Shop order issued to
 * @property Guid $ParentShopOrderMaterialPlan Shop order material plan issued to
 * @property Int32 $ParentShopOrderNumber Number of shop order issued to
 * @property Double $Quantity Quantity of this SubOrderReceipt
 * @property Guid $SubShopOrder Shop order issued from
 * @property Int32 $SubShopOrderNumber Number of shop order issued from
 * @property DateTime $TransactionDate Effective date of this SubOrderReceipt
 * @property String $Unit Unit of measurement abbreviation of this SubOrderReceipt's item
 * @property String $UnitDescription Unit of measurement of this SubOrderReceipt's item
 * @property Guid $Warehouse ID of warehouse SubOrderReceipt
 * @property String $WarehouseCode Code of warehouse SubOrderReceipt
 * @property String $WarehouseDescription Description of warehouse SubOrderReceipt
 */
class SubOrderReceipt extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'ShopOrderReceiptStockTransactionId';

    protected $fillable = [
        'ShopOrderReceiptStockTransactionId',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
        'DraftStockTransactionID',
        'HasReversibleQuantity',
        'Item',
        'ItemCode',
        'ItemDescription',
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
        'WarehouseDescription'
    ];

    protected $url = 'manufacturing/SubOrderReceipts';

}
