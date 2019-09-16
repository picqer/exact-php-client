<?php

namespace Picqer\Financials\Exact;

/**
 * Class StageForDeliveryReversal.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingStageForDeliveryReversals
 *
 * @property string $Id ID of this StageForDeliveryReversal
 * @property string $CreatedBy ID of creating user
 * @property string $CreatedByFullName Name of the creating user
 * @property string $CreatedDate Date of this reversal
 * @property int $IsBatch Does the shop order receipt's item use batch numbers
 * @property int $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of the StageForDeliveryReversal's item
 * @property int $IsSerial Does the shop order receipt's item use serial numbers
 * @property string $Item Item reversed
 * @property string $ItemCode Code of item reversed
 * @property string $ItemDescription Description of item reversed
 * @property string $ItemPictureUrl Picture url of by-product item
 * @property float $Quantity Quantity reversed
 * @property string $RelatedId ID of the original stage for delivery entry, which is being reversed
 * @property string $ShopOrder Shop order being reversed to
 * @property int $ShopOrderNumber Number of shop order being reversed to
 * @property string $TransactionDate Effective date of this StageForDeliveryReversal
 * @property string $Unit Unit of measurement abbreviation of item reversed
 * @property string $UnitDescription Unit of measurement of item reversed
 * @property string $Warehouse ID of the shop order warehouse
 * @property string $WarehouseCode Code of the shop order warehouse
 * @property string $WarehouseDescription Description of the shop order warehouse
 */
class StageForDeliveryReversal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Id',
        'CreatedBy',
        'CreatedByFullName',
        'CreatedDate',
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

    protected $url = 'manufacturing/StageForDeliveryReversals';
}
