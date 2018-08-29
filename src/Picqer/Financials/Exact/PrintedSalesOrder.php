<?php

namespace Picqer\Financials\Exact;

/**
 * Class PrintedSalesOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesorderPrintedSalesOrders
 *
 * @property Guid $OrderId Primary key, Reference to OrderId of SalesOrder
 * @property Int32 $Division Division code
 * @property Guid $Document Contains the id of the document that was created
 * @property String $DocumentCreationError Contains the error message if an error occurred during the creation of the document
 * @property String $DocumentCreationSuccess Contains information if a document was succesfully created
 * @property Guid $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email
 * @property String $EmailCreationError Contains the error message if an error occurred during the creation of the email
 * @property String $EmailCreationSuccess Contains confirmation that an email was sent. If an email cannot be delivered this property will still show confirmation that the email was sent.
 * @property Guid $EmailLayout Based on this layout the email text is produced
 * @property String $ExtraText Extra text that can be added to the printed document and email
 * @property Boolean $SendEmailToCustomer Set to True if an email containing the invoice should be sent to the invoice customer
 * @property String $SenderEmailAddress Email address from which the email will be sent. If not specified, the company email address will be used.
 */
class PrintedSalesOrder extends Model
{
    protected $primaryKey = 'OrderId';

    protected $fillable = [
        'OrderId',
        'Division',
        'Document',
        'DocumentCreationError',
        'DocumentCreationSuccess',
        'DocumentLayout',
        'EmailCreationError',
        'EmailCreationSuccess',
        'EmailLayout',
        'ExtraText',
        'SendEmailToCustomer',
        'SenderEmailAddress'
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

    protected $url = 'salesorder/PrintedSalesOrders';
}