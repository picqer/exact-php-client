<?php

namespace Picqer\Financials\Exact;

/**
 * Class Task.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=activitiesTasks
 *
 * @property string $ID The primary key
 * @property guid $Account The account that is related to the task
 * @property date $ActionDate The end date by which the task has to be realized.
 * @property guid $Contact The contact person that is related to the task
 * @property guid $Creator User ID of the creator
 * @property string $Descripton The description of the task
 * @property guid $Modifier User ID of the last modifier
 * @property string $Notes The notes of the task
 * @property guid $User The user that has to realize the task
 *
 */
class Task extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'ActionDate',
        'Contact',
        'Creator',
        'Description',
        'Modifier',
        'Notes',
        'User',
    ];

    protected $url = 'activities/Tasks';
}
