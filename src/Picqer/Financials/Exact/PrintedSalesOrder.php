<?php

namespace Picqer\Financials\Exact;

/**
 * Class PrintedSalesOrder
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=salesorderPrintedSalesOrders
 *
 * @property string $OrderId Primary key, Reference to OrderId of SalesOrder
 * @property int $Division Division code
 * @property string $Document Contains the id of the document that was created
 * @property string $DocumentCreationError Contains the error message if an error occurred during the creation of the document
 * @property string $DocumentCreationSuccess Contains information if a document was succesfully created
 * @property string $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email
 * @property string $EmailCreationError Contains the error message if an error occurred during the creation of the email
 * @property string $EmailCreationSuccess Contains confirmation that an email was sent. If an email cannot be delivered this property will still show confirmation that the email was sent.
 * @property string $EmailLayout Based on this layout the email text is produced
 * @property string $ExtraText Extra text that can be added to the printed document and email
 * @property bool $SendEmailToCustomer Set to True if an email containing the invoice should be sent to the invoice customer
 * @property string $SenderEmailAddress Email address from which the email will be sent. If not specified, the company email address will be used.
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