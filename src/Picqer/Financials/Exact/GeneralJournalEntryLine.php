<?php

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntryLines
 *
 * @property string $ID Primary key
 * @property string $Account Reference to account
 * @property float $AmountFC Amount in the currency of the transaction. If an 'Including' VAT code is used this amount includes the VAT amount.
 * @property float $AmountVATFC Vat amount in the currency of the transaction. If you want to set this in a POST you have to specify VATCode as well.
 * @property string $Asset Reference to asset
 * @property string $CostCenter Reference to cost center
 * @property string $CostUnit Reference to cost unit
 * @property string $Date Entry date
 * @property string $Description Description
 * @property string $Document Reference to document
 * @property string $EntryID Reference to header of the entry
 * @property string $GLAccount General ledger account
 * @property string $Notes Extra remarks
 * @property string $OffsetID
 * @property int $OurRef Our ref of general journal entry
 * @property string $Project Reference to project
 * @property float $Quantity
 * @property string $VATCode VATCode can only be used if the general journal has VAT enabled. VAT Lines will be automatically created if the VATCode is specified when creating a new general journal entry.
 * @property float $VATPercentage Vat percentage
 */
class GeneralJournalEntryLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AmountFC',
        'AmountVATFC',
        'Asset',
        'CostCenter',
        'CostUnit',
        'Date',
        'Description',
        'Document',
        'EntryID',
        'GLAccount',
        'Notes',
        'OffsetID',
        'OurRef',
        'Project',
        'Quantity',
        'VATCode',
        'VATPercentage',
    ];

    protected $url = 'generaljournalentry/GeneralJournalEntryLines';
}
