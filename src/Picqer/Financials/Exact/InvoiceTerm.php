<?php
namespace Picqer\Financials\Exact;
/**
 * Class InvoiceTerm
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectInvoiceTerms
 *
 * @property Guid ID Primary key
 * @property Double Amount Amount in the currency of the transaction
 * @property DateTime Created Creation date
 * @property Guid Creator User ID of creator
 * @property String CreatorFullName Name of creator
 * @property String Deliverable WBS's deliverable linked to invoice term
 * @property String Description Description of invoice term
 * @property Int32 Division Division number
 * @property DateTime ExecutionFromDate Execution date: From
 * @property DateTime ExecutionToDate Execution date: To
 * @property DateTime InvoiceDate Invoice date
 * @property Guid Item Reference to item
 * @property String ItemDescription Description of item
 * @property DateTime Modified Last modified date
 * @property Guid Modifier User ID of modifier
 * @property String ModifierFullName Name of modifier
 * @property String Notes Notes
 * @property Double Percentage Percentage of amount per project's budgeted amount
 * @property Guid Project Reference to project
 * @property String ProjectDescription Description of project
 * @property String VATCode Reference to VATCode
 * @property String VATCodeDescription Description of VATCode
 * @property Double VATPercentage VATCode percentage
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
        'VATPercentage'
    ];

    protected $url = 'project/InvoiceTerms';
}