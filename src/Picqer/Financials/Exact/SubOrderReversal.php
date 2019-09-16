<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubOrderReversal.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingSubOrderReversals
 *
 * @property string $MaterialReversalStockTransactionId MaterialReversal.StockTransactionId related to this SubOrderReversal's MaterialReversal
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Creation date of this SubOrderReversal
 * @property int $IsBatch Does the SubOrderReversal's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the SubOrderReversal's item
 * @property int $IsSerial Does the SubOrderReversal's item use serial numbers
 * @property string $Item Item reversed
 * @property string $ItemCode Code of item reversed
 * @property string $ItemDescription Description of item reversed
 * @property string $ItemPictureUrl Picture url of shop order item
 * @property string $Note Notes logged with this reversal
 * @property string $OriginalMaterialIssueStockTransactionId MaterialIssue.StockTransactionId related to this SubOrderReceipt's original MaterialIssue
 * @property string $OriginalShopOrderReceiptStockTransactionId ShopOrderReceipt.StockTransactionId related to this SubOrderReceipt's original ShopOrderReceipt
 * @property string $ParentShopOrder Shop order reversed from
 * @property int $ParentShopOrderNumber Number of shop order reversed from
 * @property float $Quantity Quantity of this SubOrderReversal
 * @property string $ShopOrderReversalStockTransactionId ShopOrderReversal.StockTransactionId related to this SubOrderReversal's ShopOrderReversal
 * @property string $SubShopOrder Shop order reversed to
 * @property int $SubShopOrderNumber Number of shop order reversed to
 * @property string $TransactionDate Effective date of this SubOrderReversal
 * @property string $Unit Unit of measurement abbreviation of this SubOrderReversal's item
 * @property string $UnitDescription Unit of measurement of this SubOrderReversal's item
 * @property string $Warehouse ID of warehouse of this SubOrderReversal
 * @property string $WarehouseCode Code of warehouse of this SubOrderReversal
 * @property string $WarehouseDescription Description of warehouse of this SubOrderReversal
 */
class SubOrderReversal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'MaterialReversalStockTransactionId';

    protected $fillable = [
        'MaterialReversalStockTransactionId',
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
        'WarehouseDescription',
    ];

    protected $url = 'manufacturing/SubOrderReversals';
}
