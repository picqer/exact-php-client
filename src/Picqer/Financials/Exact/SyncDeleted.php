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
 * @property int $EntityType Entity Types: 1= TransactionLines 2= Accounts 3= Addresses 4= Attachments 5= Contacts 6= Documents 7= GLAccounts 8= ItemPrices 9= Items 10= PaymentTerms 11= Quotations (This entity is going to be removed. Please refer to the new entity QuotationHeaders, QuotationLines.) 12= SalesOrders (This entity is going to be removed. Please refer to the new entity SalesOrderHeaders, SalesOrderLines.) 13= SalesInvoices 14= TimeCostTransactions 15= StockPositions 16= GoodsDeliveries 17= GoodsDeliveryLines 18= GLClassifications 19= ItemWarehouses 20= StorageLocationStockPositions 21= Projects 22= PurchaseOrders 23= Subscriptions 24= SubscriptionLines 25= ProjectWBS 26= ProjectPlanning 27= LeaveAbsenceHoursByDay 28= SerialBatchNumbers 29= StockSerialBatchNumbers 30= ItemAccounts 31= DiscountTables 32= SalesOrderHeaders 33= SalesOrderLines 34= QuotationHeaders 35= QuotationLines
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
