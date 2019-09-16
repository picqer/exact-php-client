<?php

namespace Picqer\Financials\Exact;

/**
 * Class OpportunityDocumentsCount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMOpportunityDocumentsCount
 */
class OpportunityDocumentsCount extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
    ];

    protected $url = 'read/crm/OpportunityDocumentsCount?opportunityId={Edm.Guid}&searchText={Edm.String}';
}
