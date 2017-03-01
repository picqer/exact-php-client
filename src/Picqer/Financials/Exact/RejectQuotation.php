<?php 

namespace Picqer\Financials\Exact;

/**
 * Class RejectQuotation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMRejectQuotation
 * 
 * @property Guid $QuotationID Identifier of the quotation.
 * @property Int32 $Division Division code.
 * @property String $ErrorMessage Contains the error message if an error occurred during the rejection of the quotation.
 * @property Guid $ReasonCode Reason why the quotation was rejected.
 * @property String $SuccessMessage Contains information if the quotation was successfully rejected.
 */
class RejectQuotation extends Model
{
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'QuotationID';

    protected $fillable = [
        'QuotationID',
        'Division',
        'ErrorMessage',
        'ReasonCode',
        'SuccessMessage'
    ];

    protected $url = 'crm/RejectQuotation';

}
