<?php

namespace Picqer\Financials\Exact;

/**
 * Class DirectDebitMandate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=cashflowDirectDebitMandates
 *
 * @property Guid $ID Primary key
 * @property Guid $Account Account the mandate belongs to
 * @property Guid $BankAccount Bank account the mandate applies to
 * @property DateTime $CancellationDate Cancellation date
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Byte $FirstSend Indicates the first collection hasn't been sent/confirmed with this mandate.
 * @property Byte Indicates if the mandate is the main, you can have only one main mandate
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property Int16 $PaymentType Payment type. 0 = one-off payment, 1 = recurrent payment, 2 = AdHoc (UK only)
 * @property String $Reference Reference
 * @property DateTime $SignatureDate Signature date
 * @property Int16 $Type Type of mandate 0 = core, 1 = B2B, 2 = bottomline (UK only)
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

