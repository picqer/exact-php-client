<?php namespace Picqer\Financials\Exact;

/**
 * Class Costcenter
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMCostcenters
 *
 * @property Guid $ID Primary key
 * @property Boolean $Active Indicates if the cost center is active: 0 = inactive 1 = active
 * @property String $Code Code (user-defined ID)
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description (text)
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 */
class Costcenter extends Model
{

    use Query\Findable;
    use Persistance\Storable;

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
        'ModifierFullName'
    ];

    protected $url = 'hrm/Costcenters';
}
