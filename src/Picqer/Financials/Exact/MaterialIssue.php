<?php namespace Picqer\Financials\Exact;

/**
 * Class MaterialIssue
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingMaterialIssues
 * 
 * @property Guid $StockTransactionId ID of stock transaction related to this material issue
 * @property Guid $CreatedBy ID of creating user
 * @property String $CreatedByFullName Name of the creating user
 * @property DateTime $CreatedDate Date this material issue was created
 * @property Guid $DraftStockTransactionID Serial or batch numbers are reserved prior to a POST to MaterialIssues. This DraftStockTransactionID represents the group of serial or batch numbers to be used in this transaction.
 * @property Boolean $HasReversibleQuantity Indicates if this MaterialIssue has a quantity eligible to be reversed via MaterialReversals
 * @property Byte $IsBackflush Boolean indicating if this material issue was the result of shop order backflushing
 * @property Byte $IsBatch Does the material issue's item use batch numbers
 * @property Byte $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the material issue's item
 * @property Byte $IsIssueFromChild Boolean indicating if this material issue was an issue to a parent shop order
 * @property Byte $IsSerial Does the material issue's item use serial numbers
 * @property Guid $Item Item issued
 * @property String $ItemCode Code of item issued
 * @property String $ItemDescription Description of item issued
 * @property String $ItemPictureUrl Picture url of item issued
 * @property String $Note Notes logged with this material issue
 * @property Double $Quantity Quantity of this material issue
 * @property Guid $RelatedStockTransaction If this transaction was part of a SubOrderReceipt, this ID is the related ShopOrderReceipt.StockTransactionID.
 * @property Guid $ShopOrder ID of shop order issued to
 * @property Guid $ShopOrderMaterialPlan ID of shop order material plan
 * @property Int32 $ShopOrderNumber Number of shop order issued to
 * @property Guid $StorageLocation ID of storage location issued from
 * @property String $StorageLocationCode Code of storage location issued from
 * @property String $StorageLocationDescription Description of storage location issued from
 * @property DateTime $TransactionDate Effective date of this material issue
 * @property String $Unit Unit of measurement abbreviation of item issued
 * @property String $UnitDescription Unit of measurement of item issued
 * @property Guid $Warehouse ID of warehouse issued from
 * @property String $WarehouseCode Code of warehouse issued from
 * @property String $WarehouseDescription Description of warehouse issued from
 */
class MaterialIssue extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'StockTransactionId',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
        'DraftStockTransactionID',
        'HasReversibleQuantity',
        'IsBackflush',
        'IsBatch',
        'IsFractionAllowedItem',
        'IsIssueFromChild',
        'IsSerial',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemPictureUrl',
        'Note',
        'Quantity',
        'RelatedStockTransaction',
        'ShopOrder',
        'ShopOrderMaterialPlan',
        'ShopOrderNumber',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
        'TransactionDate',
        'Unit',
        'UnitDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription'
    ];

    protected $url = 'manufacturing/MaterialIssues';

}
