<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesOrderID
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesOrderID
 *
 * @property string $ID
 */
class SalesOrderID extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
    ];

    protected $url = 'salesinvoice/SalesOrderID';

}