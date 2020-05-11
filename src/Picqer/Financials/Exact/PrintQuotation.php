<?php

namespace Picqer\Financials\Exact;

/**
 * Class PrintQuotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMPrintQuotation
 *
 * @property string $QuotationID Identifier of the quotation
 * @property int $Division Division code
 * @property string $Document Contains the id of the document that was created
 * @property string $DocumentCreationError Contains the error message if an error occurred during the creation of the document
 * @property string $DocumentCreationSuccess Contains information if a document was successfully created
 * @property string $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email. In case it is not specified, the default layout is used.
 * @property string $EmailCreationError Contains the error message if an error occurred during the creation of the Email
 * @property string $EmailLayout Based on this layout the email text is produced. In case it is not specified, the default layout is used.
 * @property string $ExtraText Extra text that can be added to the printed document and email
 * @property string $QuotationDate Date of the quotation printed
 * @property bool $SendEmailToCustomer Set to True if an email containing the quotation should be sent to the customer
 * @property string $SenderEmailAddress Email address from which the email will be sent. If not specified, the company email address will be used.
 */
class PrintQuotation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

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
        'SenderEmailAddress',
    ];

    protected $url = 'crm/PrintQuotation';
}
