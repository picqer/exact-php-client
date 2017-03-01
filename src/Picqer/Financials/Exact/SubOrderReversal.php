<?php 

namespace Picqer\Financials\Exact;

/**
 * Class SubOrderReversal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingSubOrderReversals
 * 
 * @property Guid $MaterialReversalStockTransactionId MaterialReversal.StockTransactionId related to this SubOrderReversal's MaterialReversal
 * @property Guid $CreatedBy ID of creating user
 * @property String $CreatedByFullName Name of the creating user
 * @property DateTime $CreatedDate Creation date of this SubOrderReversal
 * @property Guid $Item Item reversed
 * @property String $ItemCode Code of item reversed
 * @property String $ItemDescription Description of item reversed
 * @property String $Note Notes logged with this reversal
 * @property Guid $OriginalMaterialIssueStockTransactionId MaterialIssue.StockTransactionId related to this SubOrderReceipt's original MaterialIssue
 * @property Guid $OriginalShopOrderReceiptStockTransactionId ShopOrderReceipt.StockTransactionId related to this SubOrderReceipt's original ShopOrderReceipt
 * @property Guid $ParentShopOrder Shop order reversed from
 * @property Int32 $ParentShopOrderNumber Number of shop order reversed from
 * @property Double $Quantity Quantity of this SubOrderReversal
 * @property Guid $ShopOrderReversalStockTransactionId ShopOrderReversal.StockTransactionId related to this SubOrderReversal's ShopOrderReversal
 * @property Guid $SubShopOrder Shop order reversed to
 * @property Int32 $SubShopOrderNumber Number of shop order reversed to
 * @property DateTime $TransactionDate Effective date of this SubOrderReversal
 * @property String $Unit Unit of measurement abbreviation of this SubOrderReversal's item
 * @property String $UnitDescription Unit of measurement of this SubOrderReversal's item
 * @property Guid $Warehouse ID of warehouse of this SubOrderReversal
 * @property String $WarehouseCode Code of warehouse of this SubOrderReversal
 * @property String $WarehouseDescription Description of warehouse of this SubOrderReversal
 */
class SubOrderReversal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'MaterialReversalStockTransactionId';

    protected $fillable = [
        'MaterialReversalStockTransactionId',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Note',
        'OriginalMaterialIssueStockTransactionId',
        'OriginalShopOrderReceiptStockTransactionId',
        'ParentShopOrder',
        'ParentShopOrderNumber',
        'Quantity',
        'ShopOrderReversalStockTransactionId',
        'SubShopOrder',
        'SubShopOrderNumber',
        'TransactionDate',
        'Unit',
        'UnitDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription'
    ];

    protected $url = 'manufacturing/SubOrderReversals';

}
