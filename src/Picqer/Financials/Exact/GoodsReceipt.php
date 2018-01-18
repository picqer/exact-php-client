<?php

namespace Picqer\Financials\Exact;

/**
 * Class GoodsReceipt
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PurchaseOrderGoodsReceipts
 *
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Description Description of the goods receipt
 * @property Int32 $Division Division code
 * @property Guid $Document Document that is linked to the goods receipt
 * @property String $DocumentSubject Document subject
 * @property Int32 $EntryNumber Entry number of the resulting stock entry
 * @property GoodsReceiptLines $GoodsReceiptLines Collection of receipt lines
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property DateTime $ReceiptDate Date of the goods receipt
 * @property Int32 $ReceiptNumber Receipt number
 * @property String $Remarks Receipt note
 * @property Guid $Supplier Account ID of the supplier
 * @property String $SupplierCode Supplier code
 * @property Guid $SupplierContact ID of the contact person at the supplier
 * @property String $SupplierContactFullName Name of the contact person at the supplier
 * @property String $SupplierName Supplier name
 * @property Guid $Warehouse Warehouse ID
 * @property String $WarehouseCode Warehouse code
 * @property String $WarehouseDescription Description of the warehouse
 * @property String $YourRef The purchase invoice number provided by the supplier
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