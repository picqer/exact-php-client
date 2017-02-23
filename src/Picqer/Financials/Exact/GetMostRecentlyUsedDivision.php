<?php namespace Picqer\Financials\Exact;

/**
 * Class GetMostRecentlyUsedDivision
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemGetMostRecentlyUsedDivisions
 * 
 * @property Int32 $Code Primary key
 * @property String $Country Country of the division. Is used for determination of legislation
 * @property String $Currency Default currency
 * @property Boolean $Current True when this division is most recently used by the API
 * @property Guid $Customer Owner account of the division
 * @property String $CustomerCode Owner account code of the division
 * @property String $CustomerName Owner account name of the division
 * @property String $Description Description
 * @property Int64 $Hid Company number that is assigned by the customer
 * @property Boolean $IsMainDivision True if the division is the main division
 * @property Int32 $Status Follow the Division Status 0 for Inactive, 1 for Active and 2 for Archived Divisions
 */
class GetMostRecentlyUsedDivision extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'Code';

    protected $fillable = [
        'Code',
        'Country',
        'Currency',
        'Current',
        'Customer',
        'CustomerCode',
        'CustomerName',
        'Description',
        'Hid',
        'IsMainDivision',
        'Status'
    ];

    protected $url = 'system/GetMostRecentlyUsedDivisions';

}
