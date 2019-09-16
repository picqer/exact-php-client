<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingEntryAccountsByProjectAndDate.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingEntryAccountsByProjectAndDate
 *
 * @property string $AccountId Primary key
 * @property string $AccountName Name of account
 */
class TimeAndBillingEntryAccountsByProjectAndDate extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
    ];

    protected $url = 'read/project/TimeAndBillingEntryAccountsByProjectAndDate?projectId={Edm.Guid}&checkDate={Edm.DateTime}';
}
