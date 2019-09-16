<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentAccountsByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentAccountsByProject
 *
 * @property string $AccountId Primary key
 * @property string $AccountName Name of account
 * @property string $DateLastUsed Date last used
 */
class CostEntryRecentAccountsByProject extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed',
    ];

    protected $url = 'read/project/CostEntryRecentAccountsByProject?projectId={Edm.Guid}';
}
