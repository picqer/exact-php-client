<?php

namespace Picqer\Financials\Exact;

/**
 * Class AllocationRule.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowAllocationRule
 *
 * @property string $ID Primary key
 * @property string $Account The account ID to which the imported bank transaction must be allocated.
 * @property string $AccountBankAccount The bank account number that should be in the imported bank transaction in order to perform the automatic allocation on bank account. Either bank account or word must be filled.
 * @property string $Costcenter The cost centre that will be allocated to the imported bank transaction.
 * @property string $Costunit The cost unit that will be allocated to the imported bank transaction.
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property int $Division Division Code
 * @property string $GLAccount The G/L account to which the imported bank transaction must be allocated.
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $VATCode The VAT code that will be allocated to the imported bank transaction.
 * @property string $Words Words for the automatic allocation. Either bank account or word must be filled.
 */
class AllocationRule extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountBankAccount',
        'Costcenter',
        'Costunit',
        'Created',
        'Creator',
        'Division',
        'GLAccount',
        'Modified',
        'Modifier',
        'VATCode',
        'Words',
    ];

    protected $url = 'beta/{division}/cashflow/AllocationRule';
}
