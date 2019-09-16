<?php

namespace Picqer\Financials\Exact;

/**
 * Class InvoiceSalesOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceInvoiceSalesOrders
 *
 * @property string $ID Primary key
 * @property int $CreateMode Invoice creation mode- 0: Per customer 1: Per sales order
 * @property int $DeliveryNumber Stock entries entry number.
 * @property string $EndDate Stock entries entry end date.
 * @property string $Errors Errors in the process.
 * @property int $InvoiceMode Invoice quantity processing mode- 0:By quantity delivered 1:By quantity ordered.
 * @property string $JournalCode Code of Journal
 * @property int $NumberOfCreatedInvoices Number of invoices successfully created.
 * @property int $NumberOfFailedInvoices Number of invoices failed to create.
 * @property SalesOrderIDs $SalesOrderIDs Collection of Sales order IDs.
 * @property string $StartDate Stock entries entry start date.
 * @property string $UserInvoiceDate Possibility to override the InvoiceDate during creation of sales invoice from sales orders. Works only for integration with Intuit QuickBooks.
 */
class InvoiceSalesOrder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'CreateMode',
        'DeliveryNumber',
        'EndDate',
        'Errors',
        'InvoiceMode',
        'JournalCode',
        'NumberOfCreatedInvoices',
        'NumberOfFailedInvoices',
        'SalesOrderIDs',
        'StartDate',
        'UserInvoiceDate',
    ];

    protected $url = 'salesinvoice/InvoiceSalesOrders';
}
