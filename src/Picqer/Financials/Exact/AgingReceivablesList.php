<?php 

namespace Picqer\Financials\Exact;

/**
 * Class AgingReceivablesList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialAgingReceivablesList
 * 
 * @property Guid $AccountId Primary key
 * @property String $AccountCode Code of Account
 * @property String $AccountName Name of Account
 * @property Int32 $AgeGroup1 Age group 1
 * @property Double $AgeGroup1Amount Amount of age group 1
 * @property String $AgeGroup1Description Description of AgeGroup1
 * @property Int32 $AgeGroup2 Age group 2
 * @property Double $AgeGroup2Amount Amount of age group 2
 * @property String $AgeGroup2Description Description of AgeGroup2
 * @property Int32 $AgeGroup3 Age group 3
 * @property Double $AgeGroup3Amount Amount of age group 3
 * @property String $AgeGroup3Description Description of AgeGroup3
 * @property Int32 $AgeGroup4 Age group 4
 * @property Double $AgeGroup4Amount Amount of age group 4
 * @property String $AgeGroup4Description Description of AgeGroup4
 * @property String $CurrencyCode Code of Currency
 * @property Double $TotalAmount Total amount of all age groups
 */
class AgingReceivablesList extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountCode',
        'AccountName',
        'AgeGroup1',
        'AgeGroup1Amount',
        'AgeGroup1Description',
        'AgeGroup2',
        'AgeGroup2Amount',
        'AgeGroup2Description',
        'AgeGroup3',
        'AgeGroup3Amount',
        'AgeGroup3Description',
        'AgeGroup4',
        'AgeGroup4Amount',
        'AgeGroup4Description',
        'CurrencyCode',
        'TotalAmount'
    ];

    protected $url = 'read/financial/AgingReceivablesList';

}
