<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncDeleted.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncDeleted
 *
 * @property int $Timestamp Timestamp
 * @property string $DeletedBy UserID of person who deleted record
 * @property string $DeletedDate Deleted date
 * @property int $Division Division code
 * @property string $EntityKey Entity key
 * @property int $EntityType Entity Types: 1= TransactionLines 2= Accounts 3= Addresses 4= Attachments 5= Contacts 6= Documents 7= GLAccounts 8= SalesItemPrices 9= Items 10= PaymentTerms 11= Quotations 12= SalesOrders 13= SalesInvoices 14= TimeCostTransactions 15= StockPositions 16= GoodsDeliveries 17= GoodsDeliveryLines 18= GLClassifications 19= ItemWarehouses 20= StorageLocationStockPositions 21= Projects 22= PurchaseOrders 23= Subscriptions 24= SubscriptionLines 25= ProjectWBS
 * @property string $ID Primary key
 */
class SyncDeleted extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'DeletedBy',
        'DeletedDate',
        'Division',
        'EntityKey',
        'EntityType',
        'ID',
    ];

    protected $url = 'sync/Deleted';
}
