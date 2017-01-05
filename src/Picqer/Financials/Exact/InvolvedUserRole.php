<?php namespace Picqer\Financials\Exact;

/**
 * Class InvolvedUserRole
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyInvolvedUserRoles
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code of the involved user role
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of role
 * @property Int32 $DescriptionTermID Description term code of role
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 */
class InvolvedUserRole extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'DescriptionTermID',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName'
    ];

    protected $url = 'accountancy/InvolvedUserRoles';

}
