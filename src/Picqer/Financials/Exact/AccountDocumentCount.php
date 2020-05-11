<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountDocumentCount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMAccountDocumentsCount
 */
class AccountDocumentCount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
    ];

    protected $url = 'read/crm/AccountDocumentsCount?accountId={Edm.Guid}&searchText={Edm.String}&useFullTextSearch={Edm.Boolean}';
}
