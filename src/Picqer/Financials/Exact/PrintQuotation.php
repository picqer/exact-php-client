<?php namespace Picqer\Financials\Exact;

/**
 * Class PrintQuotation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMPrintQuotation
 * 
 * @property Guid $QuotationID Identifier of the quotation
 * @property Int32 $Division Division code
 * @property Guid $Document Contains the id of the document that was created
 * @property String $DocumentCreationError Contains the error message if an error occurred during the creation of the document
 * @property String $DocumentCreationSuccess Contains information if a document was successfully created
 * @property Guid $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email. In case it is not specified, the default layout is used.
 * @property String $EmailCreationError Contains the error message if an error occurred during the creation of the Email
 * @property Guid $EmailLayout Based on this layout the email text is produced. In case it is not specified, the default layout is used.
 * @property String $ExtraText Extra text that can be added to the printed document and email
 * @property DateTime $QuotationDate Date of the quotation printed
 * @property Boolean $SendEmailToCustomer Set to True if an email containing the quotation should be sent to the customer
 * @property String $SenderEmailAddress Email address from which the email will be sent. If not specified, the company email address will be used.
 */
class PrintQuotation extends Model
{
    use Persistance\Storable;

    protected $fillable = [
        'QuotationID',
        'Division',
        'Document',
        'DocumentCreationError',
        'DocumentCreationSuccess',
        'DocumentLayout',
        'EmailCreationError',
        'EmailLayout',
        'ExtraText',
        'QuotationDate',
        'SendEmailToCustomer',
        'SenderEmailAddress'
    ];

    protected $url = 'crm/PrintQuotation';

}
