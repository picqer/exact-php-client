<?php namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionReasonCode
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionReasonCodes
 * 
 * @property Guid $ID Primary key
 * @property Boolean $Active Indicates if the reason code is active
 * @property String $Code Subscription reason code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Remarks
 */
class SubscriptionReasonCode extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Active',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes'
    ];

    protected $url = 'subscription/SubscriptionReasonCodes';

}
