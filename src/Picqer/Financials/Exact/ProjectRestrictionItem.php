<?php namespace Picqer\Financials\Exact;

/**
 * Class ProjectRestrictionItem
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectRestrictionItems
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Date created
 * @property Guid $Creator Creator user ID
 * @property String $CreatorFullName Creator name
 * @property Int32 $Division Division code
 * @property Guid $Item Item linked to the restriction
 * @property String $ItemCode Item code
 * @property String $ItemDescription Description of the item
 * @property Byte $ItemIsTime Indicates if the item is a time unit item
 * @property DateTime $Modified Date modified
 * @property Guid $Modifier Modifier user ID
 * @property String $ModifierFullName Modifier name
 * @property Guid $Project Project linked to the restriction
 * @property String $ProjectCode Project code
 * @property String $ProjectDescription Project description
 */
class ProjectRestrictionItem extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemIsTime',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Project',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'project/ProjectRestrictionItems';

}
