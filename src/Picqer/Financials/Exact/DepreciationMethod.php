<?php

namespace Picqer\Financials\Exact;

/**
 * Class DepreciationMethod.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AssetsDepreciationMethods
 *
 * @property string $ID Primary key
 * @property float $Amount When the method is fixed amount, this is the periodic depreciation amount
 * @property string $Code Code of the depreciation method
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $DepreciationInterval Describes the periodic interval
 * @property string $Description Description of the method
 * @property int $Division Division code
 * @property float $MaxPercentage Indicates the maximum value when using depreciation type degressive to linear
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $Percentage Degressive percentage for methods: 10 - Degressive to linear, 11 - Degressive (fixed perc. of book value), 12 - Degressive to linear (Belgium & Luxembourg only). And interest percentage for method: 40 - Normal annuity method. On import: Can not be modified if depreciation method is already linked to an asset. For Belgium & Luxembourg the degressive percentage is calculated as double of the linear percentage
 * @property float $Percentage2 Linear percentage for methods: 10 - Degressive to linear, 3 - Linear depreciation (Belgium & Luxembourg only), 12 - Degressive to linear (Belgium & Luxembourg only). On import: Can not be modified if depreciation method is already linked to an asset
 * @property int $Periods The total number of periods for the depreciation method. Used in combination with depreciation interval: only used when interval is periodic
 * @property int $Type The actual type of deprecation, such as lineair or degressive. The periodic amounts are based on this type, in combination with other fields, such as the interval and the periods
 * @property string $TypeDescription Description of Type
 * @property int $Years Determines the total number of years for the depreciation method. Used in combination with depreciation interval: only used when interval is yearly
 */
class DepreciationMethod extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Amount',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'DepreciationInterval',
        'Description',
        'Division',
        'MaxPercentage',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Percentage',
        'Percentage2',
        'Periods',
        'Type',
        'TypeDescription',
        'Years',
    ];

    protected $url = 'assets/DepreciationMethods';
}
