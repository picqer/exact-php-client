<?php

namespace Picqer\Financials\Exact;

/**
 * Class AgingReceivablesListByAgeGroup.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialAgingReceivablesListByAgeGroup
 *
 * @property string $AccountId Primary key
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property int $AgeGroup1 Age group 1
 * @property float $AgeGroup1Amount Amount of age group 1
 * @property string $AgeGroup1Description Description of AgeGroup1
 * @property int $AgeGroup2 Age group 2
 * @property float $AgeGroup2Amount Amount of age group 2
 * @property string $AgeGroup2Description Description of AgeGroup2
 * @property int $AgeGroup3 Age group 3
 * @property float $AgeGroup3Amount Amount of age group 3
 * @property string $AgeGroup3Description Description of AgeGroup3
 * @property int $AgeGroup4 Age group 4
 * @property float $AgeGroup4Amount Amount of age group 4
 * @property string $AgeGroup4Description Description of AgeGroup4
 * @property string $CurrencyCode Code of Currency
 * @property float $TotalAmount Total amount of all age groups
 */
class AgingReceivablesListByAgeGroup extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'TotalAmount',
    ];

    protected $url = 'read/financial/AgingReceivablesListByAgeGroup?ageGroup={Edm.Int32}';
}
