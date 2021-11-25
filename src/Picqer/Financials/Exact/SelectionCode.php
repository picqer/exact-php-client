<?php

namespace Picqer\Financials\Exact;

/**
 * Class SelectionCode.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsSelectionCodes
 *
 * @property string $ID Primary key
 * @property int $Active Active
 * @property string $Code Code of the selection code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of selection code
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 */
class SelectionCode extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Active',
        'Code',
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

    protected $url = 'logistics/SelectionCodes';
}
