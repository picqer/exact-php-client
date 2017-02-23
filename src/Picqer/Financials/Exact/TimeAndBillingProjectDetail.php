<?php namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingProjectDetail
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingProjectDetails
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account The account for this project
 * @property String $AccountName 
 * @property String $Code Code of project
 * @property String $Description Description of the project
 * @property Int32 $Type Reference to ProjectTypes
 */
class TimeAndBillingProjectDetail extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Code',
        'Description',
        'Type'
    ];

    protected $url = 'read/project/TimeAndBillingProjectDetails';

}
