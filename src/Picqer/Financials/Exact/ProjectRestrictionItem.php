<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectRestrictionItem
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectRestrictionItems
 *
 * @property string $ID Primary key
 * @property string $Created Date created
 * @property string $Creator Creator user ID
 * @property string $CreatorFullName Creator name
 * @property int $Division Division code
 * @property string $Item Item linked to the restriction
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of the item
 * @property int $ItemIsTime Indicates if the item is a time unit item
 * @property string $Modified Date modified
 * @property string $Modifier Modifier user ID
 * @property string $ModifierFullName Modifier name
 * @property string $Project Project linked to the restriction
 * @property string $ProjectCode Project code
 * @property string $ProjectDescription Project description
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
        'ProjectDescription',
    ];

    protected $url = 'project/ProjectRestrictionItems';
}
