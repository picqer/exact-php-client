<?php

namespace Picqer\Financials\Exact;

/**
 * Class MaterialIssue.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingMaterialIssues
 *
 * @property string $StockTransactionId ID of stock transaction related to this material issue
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Date this material issue was created
 * @property string $DraftStockTransactionID Serial or batch numbers are reserved prior to a POST to MaterialIssues. This DraftStockTransactionID represents the group of serial or batch numbers to be used in this transaction.
 * @property bool $HasReversibleQuantity Indicates if this MaterialIssue has a quantity eligible to be reversed via MaterialReversals
 * @property int $IsBackflush Boolean indicating if this material issue was the result of shop order backflushing
 * @property int $IsBatch Does the material issue's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the material issue's item
 * @property int $IsIssueFromChild Boolean indicating if this material issue was an issue to a parent shop order
 * @property int $IsSerial Does the material issue's item use serial numbers
 * @property string $Item Item issued
 * @property string $ItemCode Code of item issued
 * @property string $ItemDescription Description of item issued
 * @property string $ItemPictureUrl Picture url of item issued
 * @property string $Note Notes logged with this material issue
 * @property float $Quantity Quantity of this material issue
 * @property string $RelatedStockTransaction If this transaction was part of a SubOrderReceipt, this ID is the related ShopOrderReceipt.StockTransactionID.
 * @property string $ShopOrder ID of shop order issued to
 * @property string $ShopOrderMaterialPlan ID of shop order material plan
 * @property int $ShopOrderNumber Number of shop order issued to
 * @property string $StorageLocation ID of storage location issued from
 * @property string $StorageLocationCode Code of storage location issued from
 * @property string $StorageLocationDescription Description of storage location issued from
 * @property string $TransactionDate Effective date of this material issue
 * @property string $Unit Unit of measurement abbreviation of item issued
 * @property string $UnitDescription Unit of measurement of item issued
 * @property string $Warehouse ID of warehouse issued from
 * @property string $WarehouseCode Code of warehouse issued from
 * @property string $WarehouseDescription Description of warehouse issued from
 */
class MaterialIssue extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'StockTransactionId';

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
        'WarehouseDescription',
    ];

    protected $url = 'manufacturing/MaterialIssues';
}
