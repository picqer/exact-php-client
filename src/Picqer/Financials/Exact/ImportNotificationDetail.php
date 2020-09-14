<?php

namespace Picqer\Financials\Exact;

/**
 * Class ImportNotificationDetail.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowImportNotificationDetails
 *
 * @property string $ID Primary key
 * @property string $CashflowImportNotification ID of the notification these details belong to.
 * @property string $CashflowTransactionFeed ID of the cashflow transaction feed related to this notification.
 * @property string $Created Creation date
 * @property int $Division Division code
 * @property string $Message Termed message
 * @property int $ResponseCode Response code
 * @property string $ResponseCodeArguments Additional information about the response
 */
class ImportNotificationDetail extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'CashflowImportNotification',
        'CashflowTransactionFeed',
        'Created',
        'Division',
        'Message',
        'ResponseCode',
        'ResponseCodeArguments',
    ];

    protected $url = 'cashflow/ImportNotificationDetails';
}
