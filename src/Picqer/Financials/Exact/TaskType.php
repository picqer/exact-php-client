<?php namespace Picqer\Financials\Exact;

/**
 * Class TaskType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyTaskTypes
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Description Name of the task type
 * @property Int32 $DescriptionTermID Term ID of the task type
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the modifier
 * @property String $ModifierFullName Name of the modifier
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
        'ModifierFullName'
    ];

    protected $url = 'accountancy/TaskTypes';

}
