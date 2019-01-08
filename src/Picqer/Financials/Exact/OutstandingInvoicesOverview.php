<?php

namespace Picqer\Financials\Exact;

/**
 * Class OutstandingInvoicesOverview
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialOutstandingInvoicesOverview
 *
 * @property string $CurrencyCode Primary key
 * @property float $OutstandingPayableInvoiceAmount Total invoice amount to be paid
 * @property float $OutstandingPayableInvoiceCount Number of invoices to be paid
 * @property float $OutstandingReceivableInvoiceAmount Total invoice amount to be received
 * @property float $OutstandingReceivableInvoiceCount Number of invoices to be received
 * @property float $OverduePayableInvoiceAmount Total payable invoice amount that is overdue
 * @property float $OverduePayableInvoiceCount Number of payable invoices that are overdue
 * @property float $OverdueReceivableInvoiceAmount Total receivable invoice amount that is overdue
 * @property float $OverdueReceivableInvoiceCount Number of receivable invoices that are overdue
 */
class OutstandingInvoicesOverview extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'CurrencyCode';

    protected $fillable = [
        'CurrencyCode',
        'OutstandingPayableInvoiceAmount',
        'OutstandingPayableInvoiceCount',
        'OutstandingReceivableInvoiceAmount',
        'OutstandingReceivableInvoiceCount',
        'OverduePayableInvoiceAmount',
        'OverduePayableInvoiceCount',
        'OverdueReceivableInvoiceAmount',
        'OverdueReceivableInvoiceCount',
    ];

    protected $url = 'read/financial/OutstandingInvoicesOverview';

}
