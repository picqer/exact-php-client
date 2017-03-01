<?php 

namespace Picqer\Financials\Exact;

/**
 * Class DirectDebitMandate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowDirectDebitMandates
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Account to which the mandate belongs.
 * @property Guid $BankAccount Bank account to which the mandate belongs.
 * @property DateTime $CancellationDate Date that the mandate is cancelled. Used to check the validity of the mandate.
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Displays the description of the mandate.
 * @property Int32 $Division Division code
 * @property Byte $FirstSend Indicates the first collection hasn't been sent/confirmed with this mandate.
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int16 $PaymentType Depending on the payment type, a different bank file will be generated. 0 = One-off payment, 1 = Recurrent payment, 2 = AdHoc (UK only)
 * @property String $Reference Displays a reference number for the mandate. It is a unique reference number that you can assign to each mandate.
 * @property DateTime $SignatureDate Date that the mandate is signed. The collection must take place after the signature date of the mandate. The date is used to check the validity of the mandate.
 * @property Int16 $Type Depending on the type, a different bank file will be generated. 0 = Core, 1 = B2B and 2 = bottomline (UK only)
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
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PaymentType',
        'Reference',
        'SignatureDate',
        'Type'
    ];

    protected $url = 'cashflow/DirectDebitMandates';

}
