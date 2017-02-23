<?php namespace Picqer\Financials\Exact;

/**
 * Class Department
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMDepartments
 * 
 * @property Guid $ID Primary key
 * @property String $Code Department Code
 * @property String $Costcenter Cost center Code
 * @property String $CostcenterDescription Cost center description
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Department description
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Explanation or extra information can be stored in the notes
 */
class Department extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Costcenter',
        'CostcenterDescription',
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

    protected $url = 'hrm/Departments';

}
