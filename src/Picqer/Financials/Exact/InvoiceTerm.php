<?php

namespace Picqer\Financials\Exact;

/**
 * Class InvoiceTerm.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectInvoiceTerms
 *
 * @property string $ID Primary key
 * @property float $Amount Amount in the currency of the transaction
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Deliverable WBS's deliverable linked to invoice term
 * @property string $Description Description of invoice term
 * @property int $Division Division number
 * @property string $ExecutionFromDate Execution date: From
 * @property string $ExecutionToDate Execution date: To
 * @property string $InvoiceDate Invoice date
 * @property string $Item Reference to item
 * @property string $ItemDescription Description of item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property float $Percentage Percentage of amount per project's budgeted amount
 * @property string $Project Reference to project
 * @property string $ProjectDescription Description of project
 * @property string $VATCode Reference to VATCode
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage VATCode percentage
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
    ];

    protected $url = 'project/InvoiceTerms';
}
