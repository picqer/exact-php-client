<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryAccountsByDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryAccountsByDate
 *
 * @property string $AccountId ID of account used for entries
 * @property string $AccountName Name of account
 */
class TimeAndBillingEntryAccountsByDate extends Model
{
    use Query\Findable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
    ];

    protected $url = 'read/project/TimeAndBillingEntryAccountsByDate';
}
