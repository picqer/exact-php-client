<?php namespace Picqer\Financials\Exact;

class PrintedSalesInvoice extends Model
{
    protected $primaryKey = 'InvoiceID';

    protected $fillable = [
        'InvoiceID',
        'Division',
        'Document',
        'DocumentCreationError',
        'DocumentCreationSuccess',
        'DocumentLayout',
        'EmailCreationError',
        'EmailCreationSuccess',
        'EmailLayout',
        'ExtraText',
        'InvoiceDate',
        'PostboxMessageCreationError',
        'PostboxMessageCreationSuccess',
        'PostboxSender',
        'ReportingPeriod',
        'ReportingYear',
        'SendEmailToCustomer',
        'SendInvoiceToCustomerPostbox',
        'SendOutputBasedOnAccount',
    ];

    public function save()
    {
        return $this->insert();
    }

    public function insert()
    {
        return $this->connection()->post($this->url, $this->json());
    }

    protected $url = 'salesinvoice/PrintedSalesInvoices';

}
