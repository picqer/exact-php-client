<?php

namespace Picqer\Financials\Exact;

/**
 * Class TaskType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyTaskTypes
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description Name of the task type
 * @property int $DescriptionTermID Term ID of the task type
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the modifier
 * @property string $ModifierFullName Name of the modifier
 */
class TaskType extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'DescriptionTermID',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'accountancy/TaskTypes';
}
