<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesOrderID.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesOrderID
 *
 * @property string $ID Use this ID to pass sales order IDs in a POST to InvoiceSalesOrders
 */
class SalesOrderID extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
    ];

    protected $url = 'salesinvoice/SalesOrderID';
}
