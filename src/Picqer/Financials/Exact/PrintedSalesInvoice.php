<?php

namespace Picqer\Financials\Exact;

/**
 * Class PrintedSalesInvoice
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesinvoicePrintedSalesInvoices
 *
 * @property string $InvoiceID Primary key, Reference to EntryID of SalesInvoice
 * @property int $Division Division code
 * @property string $Document Contains the id of the document that was created
 * @property string $DocumentCreationError Contains the error message if an error occurred during the creation of the document
 * @property string $DocumentCreationSuccess Contains information if a document was succesfully created
 * @property string $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email
 * @property string $EmailCreationError Contains the error message if an error occurred during the creation of the email
 * @property string $EmailCreationSuccess Contains confirmation that an email was sent. If an email cannot be delivered this property will still show confirmation that the email was sent.
 * @property string $EmailLayout Based on this layout the email text is produced
 * @property string $ExtraText Extra text that can be added to the printed document and email
 * @property string $InvoiceDate Date of the invoice
 * @property string $PostboxMessageCreationError Contains the error message if an error occurred during the sending of a postbox message
 * @property string $PostboxMessageCreationSuccess Contains information if a postbox message was succesfully sent
 * @property string $PostboxSender The postbox from where the message is sent
 * @property int $ReportingPeriod Reporting period
 * @property int $ReportingYear Reporting year
 * @property bool $SendEmailToCustomer Set to True if an email containing the invoice should be sent to the invoice customer
 * @property bool $SendInvoiceToCustomerPostbox Set to True if a postbox message containing the invoice should be sent to the invoice customer
 * @property bool $SendOutputBasedOnAccount Set to True if the output preference should be taken from the account. It will be either Paper, Email, Digital postbox. This option overrules both SendEmailToCustomer and SendInvoiceToCustomerPostbox.
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

    /**
     * @return $this
     */
    public function save()
    {
        $this->fill($this->insert());
        return $this;
    }

    public function insert()
    {
        return $this->connection()->post($this->url, $this->json(0, true));
    }

    protected $url = 'salesinvoice/PrintedSalesInvoices';
}
