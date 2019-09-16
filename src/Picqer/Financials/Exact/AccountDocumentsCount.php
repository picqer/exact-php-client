<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountDocumentsCount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMAccountDocumentsCount
 *
 */
class AccountDocumentsCount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
    ];

    protected $url = 'read/crm/AccountDocumentsCount?accountId={Edm.Guid}&searchText={Edm.String}&useFullTextSearch={Edm.Boolean}';
}
