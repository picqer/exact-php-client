<?php namespace Picqer\Financials\Exact;

/**
 * Class InvoiceSalesOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceInvoiceSalesOrders
 *
 * @property Guid $ID Primary key
 * @property Int32 $CreateMode Invoice creation mode- 0: Per customer 1: Per sales order
 * @property Int32 $DeliveryNumber Stock entries entry number.
 * @property DateTime $EndDate Stock entries entry end date.
 * @property String $Errors Errors in the process.
 * @property Int32 $InvoiceMode Invoice quantity processing mode- 0:By quantity delivered 1:By quantity ordered.
 * @property String $JournalCode Code of Journal
 * @property Int32 $NumberOfCreatedInvoices Number of invoices successfully created.
 * @property Int32 $NumberOfFailedInvoices Number of invoices failed to create.
 * @property SalesOrderIDs $SalesOrderIDs Collection of Sales order IDs.
 * @property DateTime $StartDate Stock entries entry start date.
 * @property DateTime $UserInvoiceDate Possibility to override the InvoiceDate during creation of sales invoice from sales orders. Works only for integration with Intuit QuickBooks.
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
