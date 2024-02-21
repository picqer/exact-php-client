<?php

namespace Picqer\Financials\Exact;

/**
 * Class CompleteSalesOrderLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderCompleteSalesOrderLine
 *
 * @property string $ID Primary key; sales order line ID
 * @property bool $CompleteDelivery Complete the remaining goods delivery. Values: true or false. Default = false
 * @property bool $CompleteInvoice Complete the outstanding invoice amount. Values:true or false. Default = false
 * @property int $Division Division code
 * @property string $ErrorMessage Contains the error message if an error occurred during the completing of the sales order line.
 * @property string $SuccessMessage Contains information if the sales order line was successfully completed.
 */
class CompleteSalesOrderLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'CompleteDelivery',
        'CompleteInvoice',
        'Division',
        'ErrorMessage',
        'SuccessMessage',
    ];

    protected $url = 'salesorder/CompleteSalesOrderLine';
}
