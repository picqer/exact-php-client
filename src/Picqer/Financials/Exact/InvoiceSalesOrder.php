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
 * @property string $Errors Errors in the process.(Result for Mode- 0)
 * @property int $InvoiceMode Invoice quantity processing mode- 0:By quantity delivered 1:By quantity ordered.
 * @property string $JournalCode Code of Journal
 * @property int $Mode Mode- 0:Sync(Default) 1:Async
 * @property int $NumberOfCreatedInvoices Number of invoices successfully created.(Result for Mode- 0)
 * @property int $NumberOfFailedInvoices Number of invoices failed to create.(Result for Mode- 0)
 * @property string $ProcessID Used in Endpoint [Invoicesalesordersresult] to Get the results
 * @property SalesOrderID[] $SalesOrderIDs Collection of Sales order IDs.
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
        'Mode',
        'NumberOfCreatedInvoices',
        'NumberOfFailedInvoices',
        'ProcessID',
        'SalesOrderIDs',
        'StartDate',
        'UserInvoiceDate',
    ];

    protected $url = 'salesinvoice/InvoiceSalesOrders';
}
