<?php

namespace Picqer\Financials\Exact;

/**
 *  {@inheritdoc}
 */
class BulkSalesOrderLine extends SalesOrderLine
{
    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'CostCenter',
        'CostCenterDescription',
        'CostPriceFC',
        'CostUnit',
        'CostUnitDescription',
        'DeliveryDate',
        'Description',
        'Discount',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemVersion',
        'ItemVersionDescription',
        'LineNumber',
        'NetPrice',
        'Notes',
        'OrderID',
        'OrderNumber',
        'Pricelist',
        'PricelistDescription',
        'Project',
        'ProjectDescription',
        'PurchaseOrder',
        'PurchaseOrderLine',
        'PurchaseOrderLineNumber',
        'PurchaseOrderNumber',
        'Quantity',
        'ShopOrder',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'UseDropShipment',
        'VATAmount',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
    ];

    protected $url = 'bulk/SalesOrder/SalesOrderLines';
}
