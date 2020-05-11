<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProcessPayment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowProcessPayments
 *
 * @property string $ID Primary key.
 * @property string $BankExportDocumentsUrl This is a URL to get the documents that were created after the payments were successfully processed. These documents have to be sent to the bank in order to do the payments.
 * @property int $Division Division code
 * @property string $ErrorMessage Contains the error message if an error occurred during the processing of the payment(s).
 * @property paymentids $PaymentIDs Use this field to pass a collection of GUIDs representing the IDs of the payments that have to be processed.
 * @property string $SuccessMessage Contains information if the payments were successfully processed.
 */
class ProcessPayment extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BankExportDocumentsUrl',
        'Division',
        'ErrorMessage',
        'PaymentIDs',
        'SuccessMessage',
    ];

    protected $url = 'cashflow/ProcessPayments';
}
