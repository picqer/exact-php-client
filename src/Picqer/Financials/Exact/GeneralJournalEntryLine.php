<?php

namespace Picqer\Financials\Exact;

/**
 * Class GeneralJournalEntryLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GeneralJournalEntryGeneralJournalEntryLines
 *
 * @property Edm.Guid $ID Primary key
 * @property Edm.Guid $Account Reference to account
 * @property Edm.Double $AmountFC Amount in the currency of the transaction. If an 'Including' VAT code is used this amount includes the VAT amount.
 * @property Edm.Double $AmountVATFC Vat amount in the currency of the transaction. If you want to set this in a POST you have to specify VATCode as well.
 * @property Edm.Guid $Asset Reference to asset
 * @property Edm.String $CostCenter Reference to cost center
 * @property Edm.String $CostUnit Reference to cost unit
 * @property Edm.DateTime $Date Entry date
 * @property Edm.String $Description Description
 * @property Edm.Guid $Document Reference to document
 * @property Edm.Guid $EntryID Reference to header of the entry
 * @property Edm.Guid $GLAccount General ledger account
 * @property Edm.String $Notes Extra remarks
 * @property Edm.Guid $OffsetID
 * @property Edm.Int32 $OurRef Our ref of general journal entry
 * @property Edm.Guid $Project Reference to project
 * @property Edm.Double $Quantity
 * @property Edm.String $VATCode VATCode can only be used if the general journal has VAT enabled. VAT Lines will be automatically created if the VATCode is specified when creating a new general journal entry.
 * @property Edm.Double $VATPercentage Vat percentage
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
