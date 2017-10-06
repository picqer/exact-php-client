<?php

namespace Picqer\Financials\Exact;

/**
 * Class Journal
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=financialJournals
 *
 * @property String $Code BIC code of the bank where the bank account is held
 * @property Int32 $Division Division code
 * @property String $Description Description of BankAccount
 * @property Guid $ID Primary Key
 * @property String $Type Bank account number. Is mandatory for Journals that have Type = Bank
 */
class Journal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Code',
        'Division',
        'Description',
        'ID',
        'Type',
    ];

    protected $url = 'financial/Journals';
}
