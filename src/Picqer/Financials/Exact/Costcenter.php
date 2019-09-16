<?php

namespace Picqer\Financials\Exact;

/**
 * Class Costcenter.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMCostcenters
 *
 * @property string $ID Primary key
 * @property bool $Active Indicates if the cost center is active: 0 = inactive 1 = active
 * @property string $Code Code (user-defined ID)
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description (text)
 * @property int $Division Division code
 * @property string $EndDate The end date by which the cost center has to be inactive
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 */
class Costcenter extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Active',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'hrm/Costcenters';
}
