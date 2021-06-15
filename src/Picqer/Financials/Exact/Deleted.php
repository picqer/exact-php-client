<?php

namespace Picqer\Financials\Exact;

/**
 * Class Deleted
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncDeleted
 *
 * @property int64 $Timestamp Timestamp
 * @property int $Division Division code
 * @property string $EntityKey Entity key
 * @property int $EntityType Entity Types:	1= TransactionLines
2= Accounts
3= Addresses
4= Attachments
5= Contacts
6= Documents
7= GLAccounts
8= SalesItemPrices
9= Items
10= PaymentTerms
11= Quotations
12= SalesOrders
13= SalesInvoices
14= TimeCostTransactions
15= StockPositions
 * @property string $ID Primary key
 */
class Deleted extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Division',
        'EntityKey',
        'EntityType',
        'ID',
    ];

    protected $url = 'sync/Deleted';
}
