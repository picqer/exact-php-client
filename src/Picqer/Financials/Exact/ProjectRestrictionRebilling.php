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
 * @property string $Created Date and time when the project restriction was created
 * @property string $Creator ID of user that created the project restriction
 * @property string $CreatorFullName Full name of user that created the project restriction
 * @property int $Division Division of project and project restriction
 * @property string $Modified Last date when the project restriction was modified
 * @property string $Modifier ID of user that modified the project restriction
 * @property string $ModifierFullName Full name of user that modified the project restriction
 * @property string $Project Project ID that the restriction is referenced to
 * @property string $ProjectCode Project code that the restriction is referenced to
 * @property string $ProjectDescription Project description that the restriction is referenced to
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
