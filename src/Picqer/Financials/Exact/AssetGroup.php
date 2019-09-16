<?php

namespace Picqer\Financials\Exact;

/**
 * Class AssetGroup.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AssetsAssetGroups
 *
 * @property string $ID Primary key
 * @property string $Code Code of the asset group
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $DepreciationMethod Default depreciation method of the assets in this asset group
 * @property string $DepreciationMethodCode Code of the depreciation method
 * @property string $DepreciationMethodDescription Description of the depreciation method
 * @property string $Description Description of the asset group
 * @property int $Division Division code
 * @property string $GLAccountAssets GLAccount for the assets
 * @property string $GLAccountAssetsCode Code of the GLAccount for the assets
 * @property string $GLAccountAssetsDescription Description of the GLAccount for the assets
 * @property string $GLAccountDepreciationBS GLAccount for depreciation (Balance sheet)
 * @property string $GLAccountDepreciationBSCode Code of the GLAccount for depreciation (Balance sheet)
 * @property string $GLAccountDepreciationBSDescription Description of the GLAccount for depreciation (Balance sheet)
 * @property string $GLAccountDepreciationPL GLAccount for depreciation (Profit & Loss)
 * @property string $GLAccountDepreciationPLCode Code of the GLAccount for depreciation (Profit & Loss)
 * @property string $GLAccountDepreciationPLDescription Description of the GLAccount for depreciation (Profit & Loss)
 * @property string $GLAccountRevaluationBS GLAccount for revaluation (Balance sheet)
 * @property string $GLAccountRevaluationBSCode Code of the GLAccount for revaluation (Balance sheet)
 * @property string $GLAccountRevaluationBSDescription Description of the GLAccount for revaluation (Balance sheet)
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 */
class AssetGroup extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'DepreciationMethod',
        'DepreciationMethodCode',
        'DepreciationMethodDescription',
        'Description',
        'Division',
        'GLAccountAssets',
        'GLAccountAssetsCode',
        'GLAccountAssetsDescription',
        'GLAccountDepreciationBS',
        'GLAccountDepreciationBSCode',
        'GLAccountDepreciationBSDescription',
        'GLAccountDepreciationPL',
        'GLAccountDepreciationPLCode',
        'GLAccountDepreciationPLDescription',
        'GLAccountRevaluationBS',
        'GLAccountRevaluationBSCode',
        'GLAccountRevaluationBSDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
    ];

    protected $url = 'assets/AssetGroups';
}
