<?php

namespace Picqer\Financials\Exact;

/**
 * Class DivisionClass.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMDivisionClasses
 *
 * @property string $ID Primary key
 * @property string $ClassNameCustomer Classification customer ID
 * @property string $ClassNameDescription Related classification description
 * @property string $ClassNameID Related classification ID
 * @property string $Code Property code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Property description
 * @property int $DescriptionTermID Property description term ID
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $SequenceNr Related classification sequence number
 */
class DivisionClass extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'ClassNameCustomer',
        'ClassNameDescription',
        'ClassNameID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'DescriptionTermID',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'SequenceNr',
    ];

    protected $url = 'hrm/DivisionClasses';
}
