<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionTypes
 *
 * @property string $ID Primary key
 * @property int $AutomaticGenerateInvoiceDays Number of days before or after generating the subscription invoice. Company settings and automatic generate invoice type need to be enabled before subscription invoice generated automatically
 * @property string $AutomaticGenerateInvoiceDescription Description of the automatic generated invoice
 * @property int $AutomaticGenerateInvoiceType Type of automatic generate invoice: 1=Never, 2=Before the subscription period, 3=After the subscription period. Company settings need to be enabled before subscription invoice generated automatically
 * @property int $AutomaticSendInvoiceDays Number of days after sending the subscription invoice. Company settings and automatic sending invoice type need to be enabled before subscription invoice sent automatically
 * @property int $AutomaticSendInvoiceMethod Method of automatic send invoice: 1=Send based on account, 2=Send via email, 3=Create documents, 4=Send via digital postbox, 5=Send and track, 6=Send via peppol. Company settings need to be enabled before subscription invoice sent automatically
 * @property int $AutomaticSendInvoiceSender Sender's email of automatic send invoice: 1=Company email address, 2=Main user email address. Company settings need to be enabled before subscription invoice sent automatically
 * @property string $AutomaticSendInvoiceSenderMailbox ID of automatic send invoice sender's mailbox. Company settings need to be enabled before subscription invoice sent automatically
 * @property int $AutomaticSendInvoiceType Type of automatic send invoice: 1=Never, 2=When available. Company settings need to be enabled before subscription invoice sent automatically
 * @property string $Code Code
 * @property string $Created Date and time when the subscription type was created
 * @property string $Creator ID of user that created the subscription type
 * @property string $CreatorFullName Full name of user that created the subscription type
 * @property string $Description Description of subscription type
 * @property int $Division Division code
 * @property int $InvoiceCorrectionMethod Invoice correction method: 1=Ratio based, 2=Zero Invoice
 * @property string $Modified Last modified date of subscription type
 * @property string $Modifier ID of user that modified the subscription type
 * @property string $ModifierFullName Full name of user that modified the subscription type
 */
class SubscriptionType extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'AutomaticGenerateInvoiceDays',
        'AutomaticGenerateInvoiceDescription',
        'AutomaticGenerateInvoiceType',
        'AutomaticSendInvoiceDays',
        'AutomaticSendInvoiceMethod',
        'AutomaticSendInvoiceSender',
        'AutomaticSendInvoiceSenderMailbox',
        'AutomaticSendInvoiceType',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'InvoiceCorrectionMethod',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'subscription/SubscriptionTypes';
}
