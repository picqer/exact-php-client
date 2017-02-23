<?php namespace Picqer\Financials\Exact;

/**
 * Class ReviewQuotation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMReviewQuotation
 * 
 * @property Guid $QuotationID Identifier of the quotation.
 * @property Boolean $CopyItemPrices Indicates if the item prices should be copied from the original quotation or the default item prices should be used.
 * @property String $Description The description of the new quotation.
 * @property Int32 $Division Division code.
 * @property Guid $Document The document linked to the new quotation.
 * @property String $ErrorMessage Contains the error message if an error occurred during the reviewing of the quotation.
 * @property Guid $NewQuotationID Identifier of the newly created quotation.
 * @property Guid $OrderAccount The account who made the order.
 * @property Guid $OrderAccountContact The contact person of the account who made the order.
 * @property String $PaymentCondition The paymentcondition linked to the new quotation.
 * @property DateTime $QuotationDate The date of the new quotation.
 * @property String $SuccessMessage Contains information if the quotation was successfully reviewed.
 */
class ReviewQuotation extends Model
{
    use Persistance\Storable;

    protected $fillable = [
        'QuotationID',
        'CopyItemPrices',
        'Description',
        'Division',
        'Document',
        'ErrorMessage',
        'NewQuotationID',
        'OrderAccount',
        'OrderAccountContact',
        'PaymentCondition',
        'QuotationDate',
        'SuccessMessage'
    ];

    protected $url = 'crm/ReviewQuotation';

}
