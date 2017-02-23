<?php namespace Picqer\Financials\Exact;

/**
 * Class ProjectRestrictionRebilling
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectRestrictionRebillings
 * 
 * @property Guid $ID Primary key
 * @property Guid $CostTypeRebill Cost type reference
 * @property String $CostTypeRebillCode Cost type code
 * @property String $CostTypeRebillDescription Cost type description
 * @property DateTime $Created Date created
 * @property Guid $Creator Creator user ID
 * @property String $CreatorFullName Creator name
 * @property Int32 $Division Division code
 * @property DateTime $Modified Date modified
 * @property Guid $Modifier Modifier user ID
 * @property String $ModifierFullName Modifier name
 * @property Guid $Project Project linked to the restriction
 * @property String $ProjectCode Project code
 * @property String $ProjectDescription Project description
 */
class ProjectRestrictionRebilling extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'CostTypeRebill',
        'CostTypeRebillCode',
        'CostTypeRebillDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Project',
        'ProjectCode',
        'ProjectDescription'
    ];

    protected $url = 'project/ProjectRestrictionRebillings';

}
