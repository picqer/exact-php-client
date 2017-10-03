<?php namespace Picqer\Financials\Exact;

/**
 * Class WebhookSubscription
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=webhooksWebhookSubscriptions
 *
 * @property  $ID
 * @property  $CallbackURL 
 * @property  $Topic 
 */
class WebhookSubscription extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
    	'ID',
        'CallbackURL',
        'Topic'
    ];

    protected $url = 'webhooks/WebhookSubscriptions';

}
