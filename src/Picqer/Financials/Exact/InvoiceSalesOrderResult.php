<?php

namespace Picqer\Financials\Exact;

/**
 * Class InvoiceSalesOrderResult.
 *
 * Get the results of an async InvoiceSalesOrder process, using the ProcessID returned by InvoiceSalesOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadSalesInvoiceInvoiceSalesOrderResult
 *
 * @property string $ProcessID Use to get the InvoiceSalesOrders result
 * @property string $Errors Error messages when process invoicesalesorder background job.
 * @property int $NumberOfCreatedInvoices Number of invoices successfully created.
 * @property int $NumberOfFailedInvoices Number of invoices failed to create.
 * @property string $Status Status of the process invoicesalesorder background job.
 */
class InvoiceSalesOrderResult extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ProcessID';

    protected $fillable = [
        'ProcessID',
        'Errors',
        'NumberOfCreatedInvoices',
        'NumberOfFailedInvoices',
        'Status',
    ];

    protected $url = 'read/salesinvoice/InvoiceSalesOrderResult';
}
