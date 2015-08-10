<?php namespace Picqer\Financials\Exact;

class SalesInvoice extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'InvoiceID';

    protected $fillable = [
        'InvoiceID',
        'AmountDC',
        'AmountFC',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'DueDate',
        'InvoiceDate',
        'InvoiceNumber',
        'InvoiceTo',
        'InvoiceToContactPerson',
        'InvoiceToContactPersonFullName',
        'InvoiceToName',
        'Journal',
        'JournalDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'OrderDate',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'OrderNumber',
        'PaymentCondition',
        'PaymentConditionDescription',
        'Remarks',
        'SalesInvoiceLines',
        'Salesperson',
        'SalespersonFullName',
        'StarterSalesInvoiceStatus',
        'StarterSalesInvoiceStatusDescription',
        'Status',
        'StatusDescription',
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'Type',
        'TypeDescription',
        'VATAmountDC',
        'VATAmountFC',
        'YourRef'
    ];

    protected $url = 'salesinvoice/SalesInvoices';

}
