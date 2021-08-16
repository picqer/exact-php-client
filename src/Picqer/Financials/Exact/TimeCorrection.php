<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeCorrection.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectTimeCorrections
 *
 * @property string $ID Primary key
 * @property string $Created Date and time when the time correction was created
 * @property string $Creator ID of user that created the time correction
 * @property string $CreatorFullName Full name of user that created the time correction
 * @property int $Division Division code
 * @property string $Modified Last modified date of time correction
 * @property string $Modifier ID of user that modified the time correction
 * @property string $ModifierFullName Full name of user that modified the time correction
 * @property string $Notes Notes of time correction for providing additional information
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
