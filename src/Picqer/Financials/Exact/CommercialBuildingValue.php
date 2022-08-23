<?php

namespace Picqer\Financials\Exact;

/**
 * Class CommercialBuildingValue.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AssetsCommercialBuildingValues
 *
 * @property string $ID Primary key
 * @property string $Asset Asset
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $EndDate End date of the date range during which this percentage is valid
 * @property int $LineNumber Line number
 * @property float $MinimumValue Minimum Value
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $PropertyValue Property Value
 * @property int $PropertyValueOption Property Value Option
 * @property string $StartDate Start date of the date range during which this percentage is valid
 */
class CommercialBuildingValue extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Asset',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'EndDate',
        'LineNumber',
        'MinimumValue',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PropertyValue',
        'PropertyValueOption',
        'StartDate',
    ];

    protected $url = 'assets/CommercialBuildingValues';
}
