<?php

namespace Picqer\Financials\Exact;

/**
 * Class BulkSalesOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=BulkSalesOrderSalesOrders
 */
class BulkSalesOrder extends SalesOrder
{
    protected $url = 'bulk/SalesOrder/SalesOrders';
}
