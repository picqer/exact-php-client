<?php

namespace Picqer\Financials\Exact;

/**
 * Class ImportNotification.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowImportNotifications
 *
 * @property string $ID Primary key
 * @property string $BankAccount Number of the bank account related to the notification.
 * @property string $BankAccountID ID of the bank account related to the notification.
 * @property string $Created Creation date
 * @property int $Division Division code
 * @property string $Document ID of the document related to the notification.
 * @property int $Result Code of the import result
 * @property string $ResultDescription Description of the import result
 * @property string $RetriedBy ID of the user that requested a retry of the import.
 * @property string $RetriedOn Date when the retry was requested.
 */
class ImportNotification extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BankAccount',
        'BankAccountID',
        'Created',
        'Division',
        'Document',
        'Result',
        'ResultDescription',
        'RetriedBy',
        'RetriedOn',
    ];

    protected $url = 'cashflow/ImportNotifications';
}
