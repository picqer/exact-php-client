<?php namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionRestrictionEmployee
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionRestrictionEmployees
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Int32 $Division Division code
 * @property Guid $Employee Employee linked to the restriction
 * @property String $EmployeeFullName Name of employee
 * @property Int32 $EmployeeHID Readable ID of employee
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property Guid $Subscription Reference to subscription
 * @property String $SubscriptionDescription Description of subscription
 * @property Int32 $SubscriptionNumber Number of subscription
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
        'SubscriptionNumber'
    ];

    protected $url = 'subscription/SubscriptionRestrictionEmployees';

}
