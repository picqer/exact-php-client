<?php namespace Picqer\Financials\Exact;

/**
 * Class AssetGroup
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AssetsAssetGroups
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code of the asset group
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Guid $DepreciationMethod Default depreciation method of the assets in this asset group
 * @property String $DepreciationMethodCode Code of the depreciation method
 * @property String $DepreciationMethodDescription Description of the depreciation method
 * @property String $Description Description of the asset group
 * @property Int32 $Division Division code
 * @property Guid $GLAccountAssets GLAccount for the assets
 * @property String $GLAccountAssetsCode Code of the GLAccount for the assets
 * @property String $GLAccountAssetsDescription Description of the GLAccount for the assets
 * @property Guid $GLAccountDepreciationBS GLAccount for depreciation (Balance sheet)
 * @property String $GLAccountDepreciationBSCode Code of the GLAccount for depreciation (Balance sheet)
 * @property String $GLAccountDepreciationBSDescription Description of the GLAccount for depreciation (Balance sheet)
 * @property Guid $GLAccountDepreciationPL GLAccount for depreciation (Profit & Loss)
 * @property String $GLAccountDepreciationPLCode Code of the GLAccount for depreciation (Profit & Loss)
 * @property String $GLAccountDepreciationPLDescription Description of the GLAccount for depreciation (Profit & Loss)
 * @property Guid $GLAccountRevaluationBS GLAccount for revaluation (Balance sheet)
 * @property String $GLAccountRevaluationBSCode Code of the GLAccount for revaluation (Balance sheet)
 * @property String $GLAccountRevaluationBSDescription Description of the GLAccount for revaluation (Balance sheet)
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
 */
class AssetGroup extends Model
{
    use Query\Findable;

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
        'Notes'
    ];

    protected $url = 'assets/AssetGroups';

}
