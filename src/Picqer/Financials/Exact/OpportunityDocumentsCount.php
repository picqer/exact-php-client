<?php 

namespace Picqer\Financials\Exact;

/**
 * Class OpportunityDocumentsCount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMOpportunityDocumentsCount
 * 
 * @property Int64 $OpportunityDocumentsCount 
 */
class OpportunityDocumentsCount extends Model
{
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'opportunityId';

    protected $fillable = [
        'OpportunityDocumentsCount'
    ];

    protected $url = 'read/crm/OpportunityDocumentsCount';

}
