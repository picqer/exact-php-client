<?php

namespace Picqer\Financials\Exact;

/**
 * Class RejectQuotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMRejectQuotation
 *
 * @property string $QuotationID Identifier of the quotation.
 * @property int $Division Division code.
 * @property string $ErrorMessage Contains the error message if an error occurred during the rejection of the quotation.
 * @property string $ReasonCode Reason why the quotation was rejected.
 * @property string $SuccessMessage Contains information if the quotation was successfully rejected.
 */
class RejectQuotation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

    protected $fillable = [
        'QuotationID',
        'Division',
        'ErrorMessage',
        'ReasonCode',
        'SuccessMessage',
    ];

    protected $url = 'crm/RejectQuotation';
}
