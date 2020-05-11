<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReviewQuotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMReviewQuotation
 *
 * @property string $QuotationID Identifier of the quotation.
 * @property bool $CopyItemPrices Indicates if the item prices should be copied from the original quotation or the default item prices should be used.
 * @property string $Description The description of the new quotation.
 * @property int $Division Division code.
 * @property string $Document The document linked to the new quotation.
 * @property string $ErrorMessage Contains the error message if an error occurred during the reviewing of the quotation.
 * @property string $NewQuotationID Identifier of the newly created quotation.
 * @property string $OrderAccount The account who made the order.
 * @property string $OrderAccountContact The contact person of the account who made the order.
 * @property string $PaymentCondition The paymentcondition linked to the new quotation.
 * @property string $QuotationDate The date of the new quotation.
 * @property string $SuccessMessage Contains information if the quotation was successfully reviewed.
 */
class ReviewQuotation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

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
        'SuccessMessage',
    ];

    protected $url = 'crm/ReviewQuotation';
}
