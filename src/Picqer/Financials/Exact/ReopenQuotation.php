<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReopenQuotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMReopenQuotation
 *
 * @property string $QuotationID Identifier of the quotation.
 * @property int $Division Division code.
 * @property string $ErrorMessage Contains the error message if an error occurred during the reopening of the quotation.
 * @property string $SuccessMessage Contains information if the quotation was successfully reopened.
 */
class ReopenQuotation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

    protected $fillable = [
        'QuotationID',
        'Division',
        'ErrorMessage',
        'SuccessMessage',
    ];

    protected $url = 'crm/ReopenQuotation';
}
