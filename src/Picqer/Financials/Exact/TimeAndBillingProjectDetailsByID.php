<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingProjectDetailsByID
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingProjectDetailsByID
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account The account for this project
 * @property String $AccountName 
 * @property String $Code Code of project
 * @property String $Description Description of the project
 * @property Int32 $Type Reference to ProjectTypes
 */
class TimeAndBillingProjectDetailsByID extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'projectId';

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Code',
        'Description',
        'Type'
    ];

    protected $url = 'read/project/TimeAndBillingProjectDetailsByID';

}
