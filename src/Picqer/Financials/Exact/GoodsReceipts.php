<?php namespace Picqer\Financials\Exact;

/**
 * Class GoodsReceipts
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=GoodsReceipts
 *
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator 
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the goods receipt
 * @property Int32 $Division Division code
 * @property Guid $Document Document that is manually linked to the goods receipt 
 * @property String $DocumentSubject Subject of the document 
 * @property Int32 $EntryNumber Entry number of the resulting stock entry 
 * @property GoodsReceiptLines $GoodsReceiptLines Collection of lines
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier    
 * @property String $ModifierFullName Name of modifier 
 * @property DateTime $ReceiptDate Date of the goods receipt
 * @property Int32 $ReceiptNumber Receipt number  
 * @property String $Remarks Receipt note
 * @property Guid $Supplier Account ID of the supplier
 * @property String $SupplierCode Code of supplier 
 * @property Guid $SupplierContact ID of the contact person at the supplier
 * @property String $SupplierContactPersonFullName 	Name of the contact person at the supplier
 * @property String $SupplierName Name of supplier  
 * @property Guid $Warehouse Warehouse
 * @property String $WarehouseCode Code of Warehouse 
 * @property String $WarehouseDescription Description of Warehouse 
 * @property String $YourRef The purchase invoice number provided by the supplier 
 */
class GoodsReceipts extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ID';

    protected $GoodsReceiptLines = [];

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
        'SupplierContactPersonFullName',
        'SupplierName',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
        'YourRef',
    ];

    public function addItem(array $array)
    {
        if ( ! isset($this->attributes['GoodsReceiptLines']) || $this->attributes['GoodsReceiptLines'] == null)
        {
            $this->attributes['GoodsReceiptLines'] = [];
        }
        if ( ! isset($array['LineNumber']))
        {
            $array['LineNumber'] = count($this->attributes['GoodsReceiptLines']) + 1;
        }
        $this->attributes['GoodsReceiptLines'][] = $array;
    }


    protected $url = 'purchaseorder/GoodsReceipts';

}
