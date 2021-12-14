<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectAccountMutation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectAccountMutations
 *
 * @property string $ID Primary key
 * @property string $Account The account that is involved in project account mutation
 * @property string $AccountCode Account code that is involved in project account mutation
 * @property string $AccountName Name of Account that is involved in project account mutation
 * @property string $Created The date and time when the project account mutation was created
 * @property string $Creator The guid ID of the user that created the project account mutation
 * @property string $CreatorFullName The full name of the user that created the project account mutation
 * @property int $Division The division of the project and account mutation
 * @property string $DivisionName Name of Division
 * @property string $EndDate End date of the project account mutation
 * @property string $Modified The date when the project account mutation was modified
 * @property string $Modifier The guid ID of the user that modified the project account mutation
 * @property string $ModifierFullName The full name of the user that modified the project account mutation
 * @property string $Notes For additional information about project account mutations
 * @property string $Project The project that is involved in project account mutation
 * @property string $ProjectCode Project code that is involved in project account mutation
 * @property string $ProjectDescription Project description that is involved in project account mutation
 * @property string $StartDate Start date of a project account mutation
 */
class ProjectAccountMutation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'DivisionName',
        'EndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'StartDate',
    ];

    protected $url = 'project/ProjectAccountMutations';
}
