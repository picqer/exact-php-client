<?php

namespace Picqer\Financials\Exact;

/**
 * Class DirectDebitMandate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowDirectDebitMandates
 *
 * @property string $ID Primary key
 * @property string $Account Account to which the mandate belongs.
 * @property string $BankAccount Bank account to which the mandate belongs.
 * @property string $CancellationDate Date that the mandate is cancelled. Used to check the validity of the mandate.
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Displays the description of the mandate.
 * @property int $Division Division code
 * @property int $FirstSend Indicates the first collection hasn't been sent/confirmed with this mandate.
 * @property int $Main Indicates if the mandate is the main, you can have only one main mandate
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $PaymentType Depending on the payment type, a different bank file will be generated. 0 = One-off payment, 1 = Recurrent payment, 2 = AdHoc (UK only)
 * @property string $Reference Displays a reference number for the mandate. It is a unique reference number that you can assign to each mandate.
 * @property string $SignatureDate Date that the mandate is signed. The collection must take place after the signature date of the mandate. The date is used to check the validity of the mandate.
 * @property int $Type Depending on the type, a different bank file will be generated. 0 = Core, 1 = B2B and 2 = bottomline (UK only)
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
        'CreatorFullName',
        'Description',
        'Division',
        'FirstSend',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentType',
        'Reference',
        'SignatureDate',
        'Type',
    ];

    protected $url = 'cashflow/DirectDebitMandates';
}
