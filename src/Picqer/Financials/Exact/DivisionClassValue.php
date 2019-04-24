<?php

namespace Picqer\Financials\Exact;

/**
 * Class DivisionClassValue.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMDivisionClassValues
 *
 * @property string $ID Primary key
 * @property class_01 $Class_01 First classification
 * @property string $Class_01_ID First classification ID
 * @property class_02 $Class_02 Second classification
 * @property string $Class_02_ID Second classification ID
 * @property class_03 $Class_03 Third classification
 * @property string $Class_03_ID Third classification ID
 * @property class_04 $Class_04 Fourth classification
 * @property string $Class_04_ID Fourth classification ID
 * @property class_05 $Class_05 Fifth classification
 * @property string $Class_05_ID Fifth classification ID
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Customer ID of customer
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 */
class DivisionClassValue extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Class_01',
        'Class_01_ID',
        'Class_02',
        'Class_02_ID',
        'Class_03',
        'Class_03_ID',
        'Class_04',
        'Class_04_ID',
        'Class_05',
        'Class_05_ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Customer',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'hrm/DivisionClassValues';
}
