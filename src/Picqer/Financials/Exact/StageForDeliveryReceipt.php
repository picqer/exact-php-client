<?php

namespace Picqer\Financials\Exact;

/**
 * Class StageForDeliveryReceipt.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingStageForDeliveryReceipts
 *
 * @property string $Id ID of staged for delivery entry
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Date this Stage for delivery wa created
 * @property bool $HasReversibleQuantity Indicates if this StageForDeliveryReceipt has a quantity eligible to be reversed via StageForDeliveryReversals
 * @property int $IsBatch Does the shop order receipt's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the stage for delivery receipt's item
 * @property int $IsSerial Does the shop order receipt's item use serial numbers
 * @property string $Item Item staged for delivery
 * @property string $ItemCode Code of item staged for delivery
 * @property string $ItemDescription Description of item staged for delivery
 * @property string $ItemPictureUrl Picture url of shop order item
 * @property float $Quantity Quantity of this StageForDeliveryReceipt
 * @property string $RelatedId ID of the original stage for delivery entry
 * @property string $ShopOrder Shop order staged for delivery
 * @property int $ShopOrderNumber Number of shop order staged for delivery
 * @property string $TransactionDate Effective date of this stage for delivery receipt
 * @property string $Unit Unit of measurement abbreviation of item finished
 * @property string $UnitDescription Unit of measurement of item finished
 * @property string $Warehouse ID of the shop order warehouse
 * @property string $WarehouseCode Code of the shop order warehouse
 * @property string $WarehouseDescription Description of the shop order warehouse
 */
class StageForDeliveryReceipt extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Id',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
        'HasReversibleQuantity',
        'IsBatch',
        'IsFractionAllowedItem',
        'IsSerial',
        'Item',
        'ItemCode',
        'ItemDescription',
        'ItemPictureUrl',
        'Quantity',
        'RelatedId',
        'ShopOrder',
        'ShopOrderNumber',
        'TransactionDate',
        'Unit',
        'UnitDescription',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'manufacturing/StageForDeliveryReceipts';
}
