<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProcessReturn.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialProcessReturn
 *
 * @property string $Request Reference to request.
 * @property bool $Processed Indicates if the status change was processed
 * @property int $Status The status of the request : 5 - Rejected, 50 - Processed
 */
class ProcessReturn extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Request';

    protected $fillable = [
        'Request',
        'Processed',
        'Status',
    ];

    protected $url = 'financial/ProcessReturn';
}
