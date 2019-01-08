<?php

namespace Picqer\Financials\Exact;

/**
 * Class BankEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionBankEntryLines
 *
 * @property string $ID Primary key
 * @property string $Account Reference to Account
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property float $AmountDC Amount in the default currency of the company
 * @property float $AmountFC Amount in the currency of the transaction
 * @property float $AmountVATFC Vat amount in the currency of the transaction
 * @property string $Asset Reference to an asset
 * @property string $AssetCode Code of Asset
 * @property string $AssetDescription Description of Asset
 * @property string $CostCenter Reference to a cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to a cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Date
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Document Reference to a document
 * @property int $DocumentNumber Number of Document
 * @property string $DocumentSubject Subject of Document
 * @property string $EntryID Reference to the header
 * @property int $EntryNumber Entry number of the header
 * @property float $ExchangeRate Exchange rate
 * @property string $GLAccount General ledger account
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra remarks
 * @property string $OffsetID Reference to offset line
 * @property int $OurRef
 * @property string $Project Reference to a project
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity Quantity
 * @property string $VATCode Reference to vat code
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage Vat code percentage
 * @property string $VATType Type of vat code
 */
class BankEntryLine extends Model
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
        'ExchangeRate',
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
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
        'VATType',
    ];

    protected $url = 'financialtransaction/BankEntryLines';
}