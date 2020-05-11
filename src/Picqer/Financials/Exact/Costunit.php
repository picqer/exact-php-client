<?php

namespace Picqer\Financials\Exact;

/**
 * Class Costunit.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMCostunits
 *
 * @property string $ID Primary key
 * @property string $Code Code (user-defined)
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description (text)
 * @property int $Division Division code
 * @property string $EndDate The end date by which the cost unit has to be inactive
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 */
class Costunit extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
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

    protected $url = 'hrm/Costunits';
}
