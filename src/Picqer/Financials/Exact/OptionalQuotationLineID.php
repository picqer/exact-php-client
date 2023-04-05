<?php

namespace Picqer\Financials\Exact;

/**
 * Class OptionalQuotationLineID.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMOptionalQuotationLineID
 *
 * @property string $ID ID of quotation line.
 */
class OptionalQuotationLineID extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
    ];

    protected $url = 'crm/OptionalQuotationLineID';
}
