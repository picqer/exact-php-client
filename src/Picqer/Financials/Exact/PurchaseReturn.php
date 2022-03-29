<?php

namespace Picqer\Financials\Exact;

/**
 * Class PurchaseReturn.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderPurchaseReturns
 *
 * @property string $ID Primary key
 * @property string $Created Creation Date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description Description of the return
 * @property int $Division Division code
 * @property string $Document Document linked to the return
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property PurchaseReturnLine[] $PurchaseReturnLines The collection of lines that belong to the purchase return.
 * @property string $Remarks Remarks linked to the return
 * @property string $ReturnDate Date of the return
 * @property int $ReturnNumber Return number
 * @property int $Status Status
 * @property string $Supplier Reference to supplier account
 * @property string $SupplierAddress Reference for supplier address
 * @property string $SupplierContact Reference for contact of supplier
 * @property string $SupplierContactFullName Name of supplier
 * @property string $TrackingNumber Tracking number of the return
 * @property string $Warehouse Warehouse for the return
 * @property string $WarehouseCode Code of warehouse
 * @property string $WarehouseDescription Description of warehouse
 * @property string $YourRef Reference number linked to the return
 */
class PurchaseReturn extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Document',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PurchaseReturnLines',
        'Remarks',
        'ReturnDate',
        'ReturnNumber',
        'Status',
        'Supplier',
        'SupplierAddress',
        'SupplierContact',
        'SupplierContactFullName',
        'TrackingNumber',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
        'YourRef',
    ];

    protected $url = 'purchaseorder/PurchaseReturns';
}
