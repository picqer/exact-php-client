<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionRestrictionEmployee.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionRestrictionEmployees
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division Division code
 * @property string $Employee Employee linked to the restriction
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Readable ID of employee
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Subscription Reference to subscription
 * @property string $SubscriptionDescription Description of subscription
 * @property int $SubscriptionNumber Number of subscription
 */
class SubscriptionRestrictionEmployee extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Subscription',
        'SubscriptionDescription',
        'SubscriptionNumber',
    ];

    protected $url = 'subscription/SubscriptionRestrictionEmployees';
}
