<?php

namespace Picqer\Financials\Exact;

/**
 * Class DigitalOrderPickingLocation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderDigitalOrderPickingLocations
 *
 * @property string $ID Primary key
 * @property string $Bin Bin value for particular order
 * @property int $Division Division code
 * @property string $EntryID The unique ID of the entry
 * @property int $IsReservedStock Is reserved stock
 * @property string $PickOrderLineID ID of the pick order line
 * @property int $PickSequence Sequence of picking
 * @property float $QuantityPicked Quantity picked
 * @property float $QuantityToBePicked Quantity to be picked
 * @property int $Status Status: 12-Open, 20-Partial, 21-Completed, 22-Picked, 40-Delivered, 45-Cancelled
 * @property string $StorageLocation Storage location ID
 * @property string $StorageLocationCode Item default storage location code
 * @property string $StorageLocationDescription Description of item default storage location
 */
class DigitalOrderPickingLocation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Bin',
        'Division',
        'EntryID',
        'IsReservedStock',
        'PickOrderLineID',
        'PickSequence',
        'QuantityPicked',
        'QuantityToBePicked',
        'Status',
        'StorageLocation',
        'StorageLocationCode',
        'StorageLocationDescription',
    ];

    protected $url = 'salesorder/DigitalOrderPickingLocations';
}
