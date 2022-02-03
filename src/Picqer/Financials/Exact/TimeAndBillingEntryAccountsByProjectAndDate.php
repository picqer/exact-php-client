<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryAccountsByProjectAndDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryAccountsByProjectAndDate
 *
 * @property string $AccountId ID of account used for entries
 * @property string $AccountName Name of account
 */
class TimeAndBillingEntryAccountsByProjectAndDate extends Model
{
    use Query\Findable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
    ];

    protected $url = 'read/project/TimeAndBillingEntryAccountsByProjectAndDate';
}
