<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ReopenQuotation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMReopenQuotation
 * 
 * @property Guid $QuotationID Identifier of the quotation.
 * @property Int32 $Division Division code.
 * @property String $ErrorMessage Contains the error message if an error occurred during the reopening of the quotation.
 * @property String $SuccessMessage Contains information if the quotation was successfully reopened.
 */
class ReopenQuotation extends Model
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
        'SuccessMessage'
    ];

    protected $url = 'crm/ReopenQuotation';

}
