<?php

namespace Picqer\Financials\Exact;

/**
 * Class DirectDebitMandate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=cashflowDirectDebitMandates
 *
 * @property string $ID Primary key
 * @property string $Account Account the mandate belongs to
 * @property string $BankAccount Bank account the mandate applies to
 * @property string $CancellationDate Cancellation date
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $Description Description
 * @property int $Division Division code
 * @property int $FirstSend Indicates the first collection hasn't been sent/confirmed with this mandate.
 * @property int $Indicates if the mandate is the main, you can have only one main mandate
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property int $PaymentType Payment type. 0 = one-off payment, 1 = recurrent payment, 2 = AdHoc (UK only)
 * @property string $Reference Reference
 * @property string $SignatureDate Signature date
 * @property int $Type Type of mandate 0 = core, 1 = B2B, 2 = bottomline (UK only)
 */
class DirectDebitMandate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'BankAccount',
        'CancellationDate',
        'Created',
        'Creator',
        'Description',
        'Division',
        'FirstSend',
        'Main',
        'Modified',
        'Modifier',
        'PaymentType',
        'Reference',
        'SignatureDate',
        'Type',
    ];

    protected $url = 'cashflow/DirectDebitMandates';
}

