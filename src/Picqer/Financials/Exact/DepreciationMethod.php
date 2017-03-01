<?php 

namespace Picqer\Financials\Exact;

/**
 * Class DepreciationMethod
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AssetsDepreciationMethods
 * 
 * @property Guid $ID Primary key
 * @property Double $Amount When the method is fixed amount, this is the periodic depreciation amount
 * @property String $Code Code of the depreciation method
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $DepreciationInterval Describes the periodic interval
 * @property String $Description Description of the method
 * @property Int32 $Division Division code
 * @property Double $MaxPercentage Indicates the maximum value when using depreciation type degressive to linear
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $Percentage Degressive percentage for methods: 10 - Degressive to linear, 11 - Degressive (fixed perc. of book value), 12 - Degressive to linear (Belgium & Luxembourg only). And interest percentage for method: 40 - Normal annuity method. On import: Can not be modified if depreciation method is already linked to an asset. For Belgium & Luxembourg the degressive percentage is calculated as double of the linear percentage
 * @property Double $Percentage2 Linear percentage for methods: 10 - Degressive to linear, 3 - Linear depreciation (Belgium & Luxembourg only), 12 - Degressive to linear (Belgium & Luxembourg only). On import: Can not be modified if depreciation method is already linked to an asset
 * @property Int16 $Periods The total number of periods for the depreciation method. Used in combination with depreciation interval: only used when interval is periodic
 * @property Int32 $Type The actual type of deprecation, such as lineair or degressive. The periodic amounts are based on this type, in combination with other fields, such as the interval and the periods
 * @property String $TypeDescription Description of Type
 * @property Int16 $Years Determines the total number of years for the depreciation method. Used in combination with depreciation interval: only used when interval is yearly
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
        'Years'
    ];

    protected $url = 'assets/DepreciationMethods';

}
