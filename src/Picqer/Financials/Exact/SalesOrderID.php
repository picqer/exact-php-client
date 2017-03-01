<?php 

namespace Picqer\Financials\Exact;

/**
 * Class SalesOrderID
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesOrderID
 * 
 * @property Guid $ID 
 */
class SalesOrderID extends Model
{
    use Persistance\Storable;

    protected $fillable = [
        'ID'
    ];

    protected $url = 'salesinvoice/SalesOrderID';

}
