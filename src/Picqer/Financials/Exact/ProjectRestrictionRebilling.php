<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectRestrictionRebilling.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectRestrictionRebillings
 *
 * @property string $ID Primary key
 * @property string $CostTypeRebill Cost type reference
 * @property string $CostTypeRebillCode Cost type code
 * @property string $CostTypeRebillDescription Cost type description
 * @property string $Created Date created
 * @property string $Creator Creator user ID
 * @property string $CreatorFullName Creator name
 * @property int $Division Division code
 * @property string $Modified Date modified
 * @property string $Modifier Modifier user ID
 * @property string $ModifierFullName Modifier name
 * @property string $Project Project linked to the restriction
 * @property string $ProjectCode Project code
 * @property string $ProjectDescription Project description
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
        'ProjectDescription',
    ];

    protected $url = 'project/ProjectRestrictionRebillings';
}
