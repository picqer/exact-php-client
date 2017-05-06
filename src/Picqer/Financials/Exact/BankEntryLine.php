<?php namespace Picqer\Financials\Exact;

/**
 * Class BankAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialTransactionBankEntryLines
 * @property Edm.Guid $ID Primary key
 * @property Edm.Guid $Account Reference to account
 * @property Edm.Double $AmountDC Amount in the default currency of the company
 * @property Edm.Double $AmountFC AAmount in the currency of the transaction
 * @property Edm.Double $AmountVATFC Vat amount in the currency of the transaction
 * @property Edm.String $Description Description
 * @property Edm.Guid $Document Reference to a document
 * @property Edm.Guid $EntryID Reference to the header
 * @property Edm.Guid $GLAccount General Ledger account
 * @property Edm.String $Notes Notes
 * @property Edm.Guid $Project Reference to project
 * @property Edm.String $VATCode Reference to VAT code
*/
class BankEntryLine extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AmountDC',
        'AmountFC',
        'AmountVATFC',
        'Description',
        'Document',
        'EntryID',
        'GLAccount',
        'Notes',
        'Project',
        'VATCode'
    ];

    protected $url = 'financialtransaction/BankEntryLines';

}
