<?php

namespace Picqer\Financials\Exact;

/**
 * Class Asset.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AssetsAssets
 *
 * @property string $ID Primary key
 * @property int $AlreadyDepreciated Indicates if an asset was already depreciated before registering it in Exact Online
 * @property string $AssetFrom In case of a transfer or a split, the original asset ID is saved in this field. This is done to provide tracability of the Asset
 * @property string $AssetFromDescription Description of AssetFrom
 * @property string $AssetGroup Asset group identifies GLAccounts to be used for Asset transactions
 * @property string $AssetGroupCode Code of the asset group
 * @property string $AssetGroupDescription Description of the asset group
 * @property float $CatalogueValue The catalogue value of the asset
 * @property string $Code Code of the asset
 * @property string $Costcenter Assets can be linked to a cost center
 * @property string $CostcenterDescription Description of Costcenter
 * @property string $Costunit Assets can be linked to a cost unit
 * @property string $CostunitDescription Description of Costunit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property float $DeductionPercentage Used for Belgium legislation. Used to produce the official 'Investment deduction' report
 * @property float $DepreciatedAmount Amount that is already depreciated when adding an existing asset. Can only be filled when 'Alreadydepreciated' is on
 * @property int $DepreciatedPeriods Number of periods that already have been depreciated for the asset. Can only be filled when 'Alreadydepreciated' is on
 * @property string $DepreciatedStartDate StartDate of depreciating. Can only be filled when 'Alreadydepreciated' is on
 * @property string $Description This is the description of the Asset
 * @property int $Division Division code
 * @property string $EndDate Asset EndDate is filled when asset is Sold or Inactive
 * @property int $EngineEmission Engine emission of the asset, needed to calculate the co² report
 * @property int $EngineType Engine type of the asset, Needed to generate a co² report
 * @property string $GLTransactionLine Links to the gltransactions.id. GL transaction line based on which the asset is created
 * @property string $GLTransactionLineDescription Description of GLTransactionLine
 * @property string $InvestmentAccount Supplier of the asset
 * @property string $InvestmentAccountCode Code of InvestmentAccount
 * @property string $InvestmentAccountName Name of InvestmentAccount
 * @property float $InvestmentAmountDC Investment amount in the default currency of the company
 * @property float $InvestmentAmountFC Investment value of the asset. Currently the field is filled with the PurchasePriceLocal. Can be status 'Not used' after sources have been cleaned
 * @property string $InvestmentCurrency Indicates the currency of the investment amount
 * @property string $InvestmentCurrencyDescription Description of InvestmentCurrency
 * @property string $InvestmentDate Refers to the original date when the asset was bought
 * @property int $InvestmentDeduction Belgian functionality, to determine how a local legal report regarding investment deduction must be created
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra remarks for the asset
 * @property string $Parent Parent asset
 * @property string $ParentCode Code of Parent
 * @property string $ParentDescription Description of Parent
 * @property binary $Picture Image for an asset
 * @property string $PictureFileName Filename of the image
 * @property string $PrimaryMethod First method of depreciation. Currently, it is the only one used
 * @property string $PrimaryMethodCode Code of PrimaryMethod
 * @property string $PrimaryMethodDescription Description of PrimaryMethod
 * @property float $ResidualValue Indicates the residual value of the asset at the end of the depreciation
 * @property string $StartDate Asset Depreciation StartDate
 * @property int $Status Identifies the status of the Asset. (see AssetStatus table to see the possibilities)
 * @property string $TransactionEntryID Reference to the transaction lines that make up the financial entry.
 * @property int $TransactionEntryNo Entry number of transaction
 */
class Asset extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AlreadyDepreciated',
        'AssetFrom',
        'AssetFromDescription',
        'AssetGroup',
        'AssetGroupCode',
        'AssetGroupDescription',
        'CatalogueValue',
        'Code',
        'Costcenter',
        'CostcenterDescription',
        'Costunit',
        'CostunitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'DeductionPercentage',
        'DepreciatedAmount',
        'DepreciatedPeriods',
        'DepreciatedStartDate',
        'Description',
        'Division',
        'EndDate',
        'EngineEmission',
        'EngineType',
        'GLTransactionLine',
        'GLTransactionLineDescription',
        'InvestmentAccount',
        'InvestmentAccountCode',
        'InvestmentAccountName',
        'InvestmentAmountDC',
        'InvestmentAmountFC',
        'InvestmentCurrency',
        'InvestmentCurrencyDescription',
        'InvestmentDate',
        'InvestmentDeduction',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Parent',
        'ParentCode',
        'ParentDescription',
        'Picture',
        'PictureFileName',
        'PrimaryMethod',
        'PrimaryMethodCode',
        'PrimaryMethodDescription',
        'ResidualValue',
        'StartDate',
        'Status',
        'TransactionEntryID',
        'TransactionEntryNo',
    ];

    protected $url = 'assets/Assets';
}
