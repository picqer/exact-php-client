<?php

namespace Picqer\Financials\Exact;

/**
 * Class Bank
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowBanks
 *
 * @property string $ID Primary key
 * @property string $BankName The name of the bank
 * @property string $BICCode The bank identification code of the bank
 * @property string $Country The country in which the bank is based
 * @property string $Created Creation date
 * @property string $Description The extended description of the bank
 * @property string $Format The account format used by the bank
 * @property string $HomePageAddress The website of the bank
 * @property string $Modified Last modified date
 * @property string $Status The status of the bank. A = Active, P = Passive
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
