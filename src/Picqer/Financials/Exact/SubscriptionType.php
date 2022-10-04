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
 * @property int $CancellationPeriod Cancellation period of subscription type
 * @property string $CancellationPeriodUnit Unit of cancellation period: wk=Week, mm=Month, yy=Year, hy=Half-year, qt=Quarter
 * @property string $Code Code
 * @property string $Created Date and time when the subscription type was created
 * @property string $Creator ID of user that created the subscription type
 * @property string $CreatorFullName Full name of user that created the subscription type
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Description Description of subscription type
 * @property int $Division Division code
 * @property int $InvoiceCorrectionMethod Invoice correction method: 1=Ratio based, 2=Zero Invoice, 3=Never invoiced
 * @property int $InvoicePeriod Invoice period of subscription type
 * @property string $InvoicePeriodUnit Unit of invoice period: wk=Week, mm=Month, yy=Year, hy=Half-year, qt=Quarter
 * @property int $ManualRenewalMethod Manual renewal method: 1=Use item prices, 2=Use current subscription prices
 * @property string $Modified Last modified date of subscription type
 * @property string $Modifier ID of user that modified the subscription type
 * @property string $ModifierFullName Full name of user that modified the subscription type
 * @property string $Notes Additional information about subscription type
 * @property int $ProlongationType Prolongation type: 0=No, 1=Manual, 2=Automatic
 * @property int $RenewalCancellationPeriod Renewal cancellation period of subscription type
 * @property string $RenewalCancellationPeriodUnit Unit of renewal cancellation period: wk=Week, mm=Month, yy=Year, hy=Half-year, qt=Quarter
 * @property int $RenewalPeriod Renewal period of subscription type
 * @property string $RenewalPeriodUnit Unit of renewal period: wk=Week, mm=Month, yy=Year, hy=Half-year, qt=Quarter
 * @property int $SubscriptionPeriod Subscription period of subscription type
 * @property string $SubscriptionPeriodUnit Unit of subscription period: wk=Week, mm=Month, yy=Year, hy=Half-year, qt=Quarter
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
        'CancellationPeriod',
        'CancellationPeriodUnit',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomField',
        'Description',
        'Division',
        'InvoiceCorrectionMethod',
        'InvoicePeriod',
        'InvoicePeriodUnit',
        'ManualRenewalMethod',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'ProlongationType',
        'RenewalCancellationPeriod',
        'RenewalCancellationPeriodUnit',
        'RenewalPeriod',
        'RenewalPeriodUnit',
        'SubscriptionPeriod',
        'SubscriptionPeriodUnit',
    ];

    protected $url = 'subscription/SubscriptionTypes';
}
