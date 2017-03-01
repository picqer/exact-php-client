<?php 

namespace Picqer\Financials\Exact;

/**
 * Class Asset
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AssetsAssets
 * 
 * @property Guid $ID Primary key
 * @property Byte $AlreadyDepreciated Indicates if an asset was already depreciated before registering it in Exact Online
 * @property Guid $AssetFrom In case of a transfer or a split, the original asset ID is saved in this field. This is done to provide tracability of the Asset
 * @property String $AssetFromDescription Description of AssetFrom
 * @property Guid $AssetGroup Asset group identifies GLAccounts to be used for Asset transactions
 * @property String $AssetGroupCode Code of the asset group
 * @property String $AssetGroupDescription Description of the asset group
 * @property Double $CatalogueValue The catalogue value of the asset
 * @property String $Code Code of the asset
 * @property String $Costcenter Assets can be linked to a cost center
 * @property String $CostcenterDescription Description of Costcenter
 * @property String $Costunit Assets can be linked to a cost unit
 * @property String $CostunitDescription Description of Costunit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Double $DeductionPercentage Used for Belgium legislation. Used to produce the official 'Investment deduction' report
 * @property Double $DepreciatedAmount Amount that is already depreciated when adding an existing asset. Can only be filled when 'Alreadydepreciated' is on
 * @property Int32 $DepreciatedPeriods Number of periods that already have been depreciated for the asset. Can only be filled when 'Alreadydepreciated' is on
 * @property DateTime $DepreciatedStartDate StartDate of depreciating. Can only be filled when 'Alreadydepreciated' is on
 * @property String $Description This is the description of the Asset
 * @property Int32 $Division Division code
 * @property DateTime $EndDate Asset EndDate is filled when asset is Sold or Inactive
 * @property Int16 $EngineEmission Engine emission of the asset, needed to calculate the coÂ² report
 * @property Int16 $EngineType Engine type of the asset, Needed to generate a coÂ² report
 * @property Guid $GLTransactionLine Links to the gltransactions.id. GL transaction line based on which the asset is created
 * @property String $GLTransactionLineDescription Description of GLTransactionLine
 * @property Guid $InvestmentAccount Supplier of the asset
 * @property String $InvestmentAccountCode Code of InvestmentAccount
 * @property String $InvestmentAccountName Name of InvestmentAccount
 * @property Double $InvestmentAmountDC Investment amount in the default currency of the company
 * @property Double $InvestmentAmountFC Investment value of the asset. Currently the field is filled with the PurchasePriceLocal. Can be status 'Not used' after sources have been cleaned
 * @property String $InvestmentCurrency Indicates the currency of the investment amount
 * @property String $InvestmentCurrencyDescription Description of InvestmentCurrency
 * @property DateTime $InvestmentDate Refers to the original date when the asset was bought
 * @property Int16 $InvestmentDeduction Belgian functionality, to determine how a local legal report regarding investment deduction must be created
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Extra remarks for the asset
 * @property Guid $Parent Parent asset
 * @property String $ParentCode Code of Parent
 * @property String $ParentDescription Description of Parent
 * @property Binary $Picture Image for an asset
 * @property String $PictureFileName Filename of the image
 * @property Guid $PrimaryMethod First method of depreciation. Currently, it is the only one used
 * @property String $PrimaryMethodCode Code of PrimaryMethod
 * @property String $PrimaryMethodDescription Description of PrimaryMethod
 * @property Double $ResidualValue Indicates the residual value of the asset at the end of the depreciation
 * @property DateTime $StartDate Asset Depreciation StartDate
 * @property Int16 $Status Identifies the status of the Asset. (see AssetStatus table to see the possibilities)
 * @property Guid $TransactionEntryID Reference to Transaction
 * @property Int32 $TransactionEntryNo Entry number of transaction
 */
class Asset extends Model
{
    use Query\Findable;

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
        'TransactionEntryNo'
    ];

    protected $url = 'assets/Assets';

}
