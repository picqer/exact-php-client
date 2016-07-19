<?php namespace Picqer\Financials\Exact;

use DateTime;
use Picqer\Financials\Exact\Model;
use Picqer\Financials\Exact\Persistance\Storable;
use Picqer\Financials\Exact\Query\Findable;

/**
 * Class Subscriptions
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=subscriptionSubscriptions
 *
 * @property Guid $ID Primary Key
 * @property String $Code Code
 * @property DateTime $Created Creation date
 * @property Guid $Creator UserID of the Creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Description Description
 * @property Int $Division Division Code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 */
class SubscriptionTypes extends Model
{

    use Findable;
    use Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName'
    ];

    protected $url = 'subscription/SubscriptionTypes';
}
