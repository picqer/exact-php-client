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
 * @property bool $IsInstant Enable instant delivery (only supported for topic 'GoodsDeliveries'). For any other topic, return an error.
 * @property string $Topic Webhook subscription topic, e.g.: Accounts, Items, StockPositions
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
