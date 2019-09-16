<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeCorrection.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectTimeCorrections
 *
 * @property string $ID Id
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property string $OriginalEntryId Reference to the time entry that this corrects for
 * @property float $Quantity Quantity has to be negative value. E.g.: If original quantity is 10 and the correct quantity is 4, this quantity is -6
 */
class TimeCorrection extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'OriginalEntryId',
        'Quantity',
    ];

    protected $url = 'project/TimeCorrections';
}
