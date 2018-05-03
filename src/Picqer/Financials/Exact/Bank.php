<?php

namespace Picqer\Financials\Exact;

/**
 * Class Bank
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowBanks
 *
 * @property Guid $ID Primary key
 * @property String $BankName The name of the bank
 * @property String $BICCode The bank identification code of the bank
 * @property String $Country The country in which the bank is based
 * @property DateTime $Created Creation date
 * @property String $Description The extended description of the bank
 * @property String $Format The account format used by the bank
 * @property String $HomePageAddress The website of the bank
 * @property DateTime $Modified Last modified date
 * @property String $Status The status of the bank. A = Active, P = Passive
 */
class Bank extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BankName',
        'BICCode',
        'Country',
        'Created',
        'Description',
        'Format',
        'HomePageAddress',
        'Modified',
        'Status',
    ];

    protected $url = 'cashflow/Banks';

}
