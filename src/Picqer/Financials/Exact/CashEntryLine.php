<?php

namespace Picqer\Financials\Exact;

/**
 * Class CashEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionCashEntryLines
 *
 * @property Guid $ID Primary key
 * @property Guid Account Reference to Account
 * @property String AccountCode Code of Account
 * @property String AccountName Name of Account
 * @property Double AmountDC Amount in the default currency of the company
 * @property Double AmountFC Amount in the currency of the transaction
 * @property Double AmountVATFC Vat amount in the currency of the transaction
 * @property Guid Asset Reference to an asset
 * @property String AssetCode Code of Asset
 * @property String AssetDescription Description of Asset
 * @property String CostCenter Reference to a cost center
 * @property String CostCenterDescription Description of CostCenter
 * @property String CostUnit Reference to a cost unit
 * @property String CostUnitDescription Description of CostUnit
 * @property DateTime Created Creation date
 * @property Guid Creator User ID of creator
 * @property String CreatorFullName Name of creator
 * @property DateTime Date
 * @property String Description Description
 * @property Int32 Division Division code
 * @property Guid Document Reference to a document
 * @property Int32 DocumentNumber Number of Document
 * @property String DocumentSubject Subject of Document
 * @property Guid EntryID Reference to the header
 * @property Int32 EntryNumber Entry number of the header
 * @property Double ExchangeRate Exchange rate
 * @property Guid GLAccount General ledger account
 * @property String GLAccountCode Code of GLAccount
 * @property String GLAccountDescription Description of GLAccount
 * @property Int32 LineNumber Line number
 * @property DateTime Modified Last modified date
 * @property Guid Modifier User ID of modifier
 * @property String ModifierFullName Name of modifier
 * @property String Notes Extra remarks
 * @property Guid OffsetID Reference to offset line
 * @property Int32 OurRef
 * @property Guid Project Reference to a project
 * @property String ProjectCode Code of Project
 * @property String ProjectDescription Description of Project
 * @property Double Quantity Quantity
 * @property String VATCode Reference to vat code
 * @property String VATCodeDescription Description of VATCode
 * @property Double VATPercentage Vat code percentage
 * @property String VATType Type of vat code
 */
class CashEntryLine extends Model
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

    protected $url = 'financialtransaction/CashEntryLines';
}
