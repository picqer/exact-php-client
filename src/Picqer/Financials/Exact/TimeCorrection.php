<?php 

namespace Picqer\Financials\Exact;

/**
 * Class TimeCorrection
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectTimeCorrections
 * 
 * @property Guid $ID Id
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
 * @property Guid $OriginalEntryId Reference to the time entry that this corrects for
 * @property Double $Quantity Quantity has to be negative value. E.g.: If original quantity is 10 and the correct quantity is 4, this quantity is -6
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
        'Quantity'
    ];

    protected $url = 'project/TimeCorrections';

}
