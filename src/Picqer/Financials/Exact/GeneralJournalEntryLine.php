<?php 

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntryLines
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Reference to account
 * @property String $AccountCode Code of Account
 * @property String $AccountName Name of Account
 * @property Double $AmountDC Amount in the default currency of the company, If an 'Including' VAT code is used this amount includes the VAT amount.
 * @property Double $AmountFC Amount in the currency of the transaction. If an 'Including' VAT code is used this amount includes the VAT amount.
 * @property Double $AmountVATDC Vat amount in the default currency of the company.
 * @property Double $AmountVATFC Vat amount in the currency of the transaction. If you want to set this in a POST you have to specify VATCode as well.
 * @property Guid $Asset Reference to asset
 * @property String $AssetCode Code of Asset
 * @property String $AssetDescription Description of Asset
 * @property String $CostCenter Reference to cost center
 * @property String $CostCenterDescription Description of CostCenter
 * @property String $CostUnit Reference to cost unit
 * @property String $CostUnitDescription Description of CostUnit
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property DateTime $Date Entry date
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Guid $Document Reference to document
 * @property Int32 $DocumentNumber Document number
 * @property String $DocumentSubject Document subject
 * @property Guid $EntryID Reference to header of the entry
 * @property Int32 $EntryNumber Entry number of the header
 * @property Guid $GLAccount General ledger account
 * @property String $GLAccountCode Code of GLAccount
 * @property String $GLAccountDescription Description of GLAccount
 * @property Int32 $LineNumber Line number
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Extra remarks
 * @property Guid $OffsetID 
 * @property Int32 $OurRef Our ref of general journal entry
 * @property Guid $Project Reference to project
 * @property String $ProjectCode Code of Project
 * @property String $ProjectDescription Description of Project
 * @property Double $Quantity Quantity
 * @property Double $VATBaseAmountDC VAT base amount in the default currency of the company
 * @property Double $VATBaseAmountFC VAT base amount in the currency of the transaction
 * @property String $VATCode VATCode can only be used if the general journal has VAT enabled. VAT Lines will be automatically created if the VATCode is specified when creating a new general journal entry.
 * @property String $VATCodeDescription Description of VATCode
 * @property Double $VATPercentage Vat percentage
 * @property String $VATType The VAT type determines what the values are in relation to VAT returns. The following values are supported:A Sales VAT to pay,D Credit note extra duty to claim,I Purchase basis,M Credit note purchase non-deductible,N Purchase non-deductible,O Purchase VAT to claim,P Purchase VAT to pay,Q Credit note purchase VAT to claim,R Extra duty to pay,S No VAT,V Sales basis,W Credit note purchase basis,X Credit note sales basis,Y Credit note purchase VAT to pay,Z Credit note sales VAT to claim
 */
class GeneralJournalEntryLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'AmountDC',
        'AmountFC',
        'AmountVATDC',
        'AmountVATFC',
        'Asset',
        'AssetCode',
        'AssetDescription',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Date',
        'Description',
        'Division',
        'Document',
        'DocumentNumber',
        'DocumentSubject',
        'EntryID',
        'EntryNumber',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'OffsetID',
        'OurRef',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'Quantity',
        'VATBaseAmountDC',
        'VATBaseAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
        'VATType'
    ];

    protected $url = 'generaljournalentry/GeneralJournalEntryLines';

}
