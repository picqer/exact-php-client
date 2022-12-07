<?php

namespace Picqer\Financials\Exact;

/**
 * Class CompleteSalesOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderCompleteSalesOrder
 *
 * @property string $OrderID Sales order entry ID.
 * @property bool $CompleteDelivery Complete the remaining goods delivery. Values: true or false. Default = false
 * @property bool $CompleteInvoice Complete the outstanding invoice amount. Values: true or false. Default = false
 * @property int $Division Division code.
 * @property string $ErrorMessage Contains the error message if an error occurred during the completing of the sales order.
 * @property string $SuccessMessage Contains information if the sales order was successfully completed.
 */
class CompleteSalesOrder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'OrderID';

    protected $fillable = [
        'OrderID',
        'CompleteDelivery',
        'CompleteInvoice',
        'Division',
        'ErrorMessage',
        'SuccessMessage',
    ];

    protected $url = 'salesorder/CompleteSalesOrder';
}
