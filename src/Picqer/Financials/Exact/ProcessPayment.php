<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ProcessPayment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowProcessPayments
 * 
 * @property Guid $ID Primary key.
 * @property String $BankExportDocumentsUrl This is a URL to get the documents that were created after the payments were successfully processed. These documents have to be sent to the bank in order to do the payments.
 * @property Int32 $Division Division code
 * @property String $ErrorMessage Contains the error message if an error occurred during the processing of the payment(s).
 * @property PaymentIDs $PaymentIDs Use this field to pass a collection of GUIDs representing the IDs of the payments that have to be processed.
 * @property String $SuccessMessage Contains information if the payments were successfully processed.
 */
class ProcessPayment extends Model
{
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BankExportDocumentsUrl',
        'Division',
        'ErrorMessage',
        'PaymentIDs',
        'SuccessMessage'
    ];

    protected $url = 'cashflow/ProcessPayments';

}
