<?php

namespace Picqer\Financials\Exact;

/**
 * Class GoodsReceipt
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderGoodsReceipts
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description Description of the goods receipt
 * @property int $Division Division code
 * @property string $Document Document that is linked to the goods receipt
 * @property string $DocumentSubject Document subject
 * @property int $EntryNumber Entry number of the resulting stock entry
 * @property GoodsReceiptLines $GoodsReceiptLines Collection of receipt lines
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $ReceiptDate Date of the goods receipt
 * @property int $ReceiptNumber Receipt number
 * @property string $Remarks Receipt note
 * @property string $Supplier Account ID of the supplier
 * @property string $SupplierCode Supplier code
 * @property string $SupplierContact ID of the contact person at the supplier
 * @property string $SupplierContactFullName Name of the contact person at the supplier
 * @property string $SupplierName Supplier name
 * @property string $Warehouse Warehouse ID
 * @property string $WarehouseCode Warehouse code
 * @property string $WarehouseDescription Description of the warehouse
 * @property string $YourRef The purchase invoice number provided by the supplier
 */
class GoodsReceipt extends Model
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
        'DocumentSubject',
        'EntryNumber',
        'GoodsReceiptLines',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ReceiptDate',
        'ReceiptNumber',
        'Remarks',
        'Supplier',
        'SupplierCode',
        'SupplierContact',
        'SupplierContactFullName',
        'SupplierName',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
        'YourRef',
    ];

    protected $url = 'purchaseorder/GoodsReceipts';

}