<?php namespace Picqer\Financials\Exact;

class SalesInvoiceLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Description',
        'Discount',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EndTime',
        'GLAccount',
        'GLAccountDescription',
        'InvoiceID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'LineNumber',
        'NetPrice',
        'Notes',
        'Pricelist',
        'PricelistDescription',
        'Project',
        'ProjectDescription',
        'Quantity',
        'StartTime',
        'Subscription',
        'SubscriptionDescription',
        'TaxSchedule',
        'TaxScheduleCode',
        'TaxScheduleDescription',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountDC',
        'VATAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage'
    ];

    protected $url = 'salesinvoice/SalesInvoiceLines';

}
