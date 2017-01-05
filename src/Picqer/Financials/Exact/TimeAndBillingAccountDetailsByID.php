<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingAccountDetailsByID
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingAccountDetailsByID
 * 
 * @property Guid $ID Primary key
 * @property String $Name Name
 */
class TimeAndBillingAccountDetailsByID extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'accountId';

    protected $fillable = [
        'ID',
        'Name'
    ];

    protected $url = 'read/project/TimeAndBillingAccountDetailsByID';

}
