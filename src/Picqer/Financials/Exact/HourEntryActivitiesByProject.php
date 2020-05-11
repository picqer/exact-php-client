<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryActivitiesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryActivitiesByProject
 *
 * @property string $ID Primary key
 * @property string $Description Description
 * @property string $ParentDescription Description of Parent
 */
class HourEntryActivitiesByProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/HourEntryActivitiesByProject?projectId={Edm.Guid}';
}
