<?php

namespace Picqer\Financials\Exact;

/**
 * Class InvoiceTerm.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectInvoiceTerms
 *
 * @property string $ID Primary key
 * @property float $Amount Amount in the currency of the transaction
 * @property string $Created Date and time when the invoice term was created
 * @property string $Creator ID of user that created the invoice term
 * @property string $CreatorFullName Full name of user that created the record
 * @property string $Deliverable WBS's deliverable linked to the invoice term
 * @property string $Description Description of invoice term
 * @property int $Division Division number
 * @property string $ExecutionFromDate Execution date: From of invoice term
 * @property string $ExecutionToDate Execution date: To of invoice term
 * @property string $InvoiceDate Invoice date of invoice term
 * @property string $InvoiceId ID of sales invoice
 * @property int $InvoiceStatus The invoice status of the invoice term. E.g: 10 = Draft, 20 = Open, 30 = Processing..., 50 = Processed
 * @property string $Item Item that linked to the invoice term
 * @property string $ItemDescription Description of item that linked to the invoice term
 * @property string $Modified Last modified date of invoice term
 * @property string $Modifier ID of user that modified the record
 * @property string $ModifierFullName Full name of user that modified the record
 * @property string $Notes Notes linked to the invoice term for providing additional information
 * @property float $Percentage Percentage of amount per project's budgeted amount
 * @property string $Project ID of project that linked to the invoice term
 * @property string $ProjectDescription Project description that linked to the invoice term
 * @property string $VATCode VAT code that used in the invoice term
 * @property string $VATCodeDescription Description of VAT code that used in the invoice term
 * @property float $VATPercentage Percentage of VAT code that used in the invoice term
 * @property string $WBS ID of WBS that linked to the invoice term
 */
class InvoiceTerm extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Amount',
        'Created',
        'Creator',
        'CreatorFullName',
        'Deliverable',
        'Description',
        'Division',
        'ExecutionFromDate',
        'ExecutionToDate',
        'InvoiceDate',
        'InvoiceId',
        'InvoiceStatus',
        'Item',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Percentage',
        'Project',
        'ProjectDescription',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
        'WBS',
    ];

    protected $url = 'project/InvoiceTerms';
}
