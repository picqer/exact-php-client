<?php

namespace Picqer\Financials\Exact;

/**
 * Class OutstandingInvoicesOverview
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialOutstandingInvoicesOverview
 *
 * @property String $CurrencyCode Primary key
 * @property Double $OutstandingPayableInvoiceAmount Total invoice amount to be paid
 * @property Double $OutstandingPayableInvoiceCount Number of invoices to be paid
 * @property Double $OutstandingReceivableInvoiceAmount Total invoice amount to be received
 * @property Double $OutstandingReceivableInvoiceCount Number of invoices to be received
 * @property Double $OverduePayableInvoiceAmount Total payable invoice amount that is overdue
 * @property Double $OverduePayableInvoiceCount Number of payable invoices that are overdue
 * @property Double $OverdueReceivableInvoiceAmount Total receivable invoice amount that is overdue
 * @property Double $OverdueReceivableInvoiceCount Number of receivable invoices that are overdue
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
