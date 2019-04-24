<?php

namespace Picqer\Financials\Exact;

/**
 * Class Department.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMDepartments
 *
 * @property string $ID Primary key
 * @property string $Code Department Code
 * @property string $Costcenter Cost center Code
 * @property string $CostcenterDescription Cost center description
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Department description
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Explanation or extra information can be stored in the notes
 */
class Department extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Costcenter',
        'CostcenterDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
    ];

    protected $url = 'hrm/Departments';
}
