<?php namespace Picqer\Financials\Exact;

/**
 * Class PrintedSalesInvoice
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesinvoicePrintedSalesInvoices
 *
 * @property Guid $InvoiceID Primary key, Reference to EntryID of SalesInvoice
 * @property Int32 $Division Division code
 * @property Guid $Document Contains the id of the document that was created
 * @property String $DocumentCreationError Contains the error message if an error occurred during the creation of the document
 * @property String $DocumentCreationSuccess Contains information if a document was succesfully created
 * @property Guid $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email
 * @property String $EmailCreationError Contains the error message if an error occurred during the creation of the email
 * @property String $EmailCreationSuccess Contains confirmation that an email was sent. If an email cannot be delivered this property will still show confirmation that the email was sent.
 * @property Guid $EmailLayout Based on this layout the email text is produced
 * @property String $ExtraText Extra text that can be added to the printed document and email
 * @property DateTime $InvoiceDate Date of the invoice
 * @property String $PostboxMessageCreationError Contains the error message if an error occurred during the sending of a postbox message
 * @property String $PostboxMessageCreationSuccess Contains information if a postbox message was succesfully sent
 * @property Guid $PostboxSender The postbox from where the message is sent
 * @property Int32 $ReportingPeriod Reporting period
 * @property Int32 $ReportingYear Reporting year
 * @property Boolean $SendEmailToCustomer Set to True if an email containing the invoice should be sent to the invoice customer
 * @property Boolean $SendInvoiceToCustomerPostbox Set to True if a postbox message containing the invoice should be sent to the invoice customer
 * @property Boolean $SendOutputBasedOnAccount Set to True if the output preference should be taken from the account. It will be either Paper, Email, Digital postbox. This option overrules both SendEmailToCustomer and SendInvoiceToCustomerPostbox.
 */
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
