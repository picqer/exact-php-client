<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryAccounts
 *
 * @property string $AccountId Primary key
 * @property string $AccountName Name of account
 */
class TimeAndBillingEntryAccount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
    ];

    protected $url = 'read/project/TimeAndBillingEntryAccounts';
}
