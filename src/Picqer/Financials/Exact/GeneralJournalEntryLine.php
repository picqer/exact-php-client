<?php

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntryLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntryLines
 *
 * @property string $ID Primary key
 * @property string $Account Reference to account
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property float $AmountDC Amount in the default currency of the company, If an 'Including' VAT code is used this amount includes the VAT amount.
 * @property float $AmountFC Amount in the currency of the transaction. If an 'Including' VAT code is used this amount includes the VAT amount.
 * @property float $AmountVATDC Vat amount in the default currency of the company.
 * @property float $AmountVATFC Vat amount in the currency of the transaction. If you want to set this in a POST you have to specify VATCode as well.
 * @property string $Asset Reference to asset
 * @property string $AssetCode Code of Asset
 * @property string $AssetDescription Description of Asset
 * @property string $CostCenter Reference to cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Date Entry date
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Reference to document
 * @property int $DocumentNumber Document number
 * @property string $DocumentSubject Document subject
 * @property string $EntryID Reference to header of the entry
 * @property int $EntryNumber Entry number of the header
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra remarks
 * @property string $OffsetID OffsetID
 * @property int $OurRef Our ref of general journal entry
 * @property string $Project Reference to project
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity Quantity
 * @property float $VATBaseAmountDC VAT base amount in the default currency of the company
 * @property float $VATBaseAmountFC VAT base amount in the currency of the transaction
 * @property string $VATCode VATCode can only be used if the general journal has VAT enabled. VAT Lines will be automatically created if the VATCode is specified when creating a new general journal entry.
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage Vat percentage
 * @property string $VATType The VAT type determines what the values are in relation to VAT returns. The following values are supported:A Sales VAT to pay,D Credit note extra duty to claim,I Purchase basis,M Credit note purchase non-deductible,N Purchase non-deductible,O Purchase VAT to claim,P Purchase VAT to pay,Q Credit note purchase VAT to claim,R Extra duty to pay,S No VAT,V Sales basis,W Credit note purchase basis,X Credit note sales basis,Y Credit note purchase VAT to pay,Z Credit note sales VAT to claim
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
        'VATType',
    ];

    protected $url = 'generaljournalentry/GeneralJournalEntryLines';
}
