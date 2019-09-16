<?php

namespace Picqer\Financials\Exact;

/**
 * Class DivisionClassName.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMDivisionClassNames
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Customer ID of customer
 * @property string $Description Description of classification
 * @property int $DescriptionTermID Term ID of the classification
 * @property divisionclasses $DivisionClasses Collection of classification properties
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $SequenceNr Sequence number
 */
class DivisionClassName extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Customer',
        'Description',
        'DescriptionTermID',
        'DivisionClasses',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'SequenceNr',
    ];

    protected $url = 'hrm/DivisionClassNames';
}
