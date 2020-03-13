<?php

namespace Picqer\Financials\Exact;

/**
 * Class HourEntryRecentAccountsByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectHourEntryRecentAccountsByProject
 *
 * @property string $AccountId Primary key
 * @property string $AccountName Name of account
 * @property string $DateLastUsed Date last used
 */
class HourEntryRecentAccountsByProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed',
    ];

    protected $url = 'read/project/HourEntryRecentAccountsByProject?projectId={Edm.Guid}';
}
