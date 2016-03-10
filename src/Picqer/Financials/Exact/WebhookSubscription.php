<?php namespace Picqer\Financials\Exact;

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
