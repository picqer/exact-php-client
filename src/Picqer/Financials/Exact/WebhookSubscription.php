<?php

namespace Picqer\Financials\Exact;

/**
 * Class WebhookSubscription.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=WebhooksWebhookSubscriptions
 *
 * @property string $ID Primary key
 * @property string $CallbackURL Callback URL endpoint
 * @property string $ClientID OAuth client Id
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the OAuth Client
 * @property int $Division Division code
 * @property bool $IsInstant Enables Instant delivery (only supported for the Good Deliveries topic)
 * @property string $Topic Webhook subscription topic, e.g.: FinancialTransactions, Items, StockPositions
 * @property string $UserID Subscribing User ID
 */
class WebhookSubscription extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'CallbackURL',
        'ClientID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'IsInstant',
        'Topic',
        'UserID',
    ];

    protected $url = 'webhooks/WebhookSubscriptions';
}
