<?php

namespace Picqer\Financials\Exact;

/**
 * Class WebhookSubscription
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=webhooksWebhookSubscriptions
 *
 * @property Guid $ID Primary key
 * @property String $CallbackURL Callback URL endpoint
 * @property Guid $ClientID OAuth client Id
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the OAuth Client
 * @property Int32 $Division Division code
 * @property String $Topic Webhook subscription topic, e.g.: FinancialTransactions, Items, StockPositions
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
        'Topic',
    ];

    protected $url = 'webhooks/WebhookSubscriptions';
}
