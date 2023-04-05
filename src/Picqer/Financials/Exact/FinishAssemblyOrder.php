<?php

namespace Picqer\Financials\Exact;

/**
 * Class FinishAssemblyOrder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryFinishAssemblyOrder
 *
 * @property string $AssemblyOrder A guid that is the unique identifier of the assembly order
 * @property string $AssemblyDate Date of the assembly order is initiated
 * @property BatchNumber[] $BatchNumbers The collection of batch numbers that belongs to the assembled and part items in the assembly order
 * @property string $Description Description of assembly order
 * @property int $Division Division code
 * @property float $FinishOrderQuantity Finish order quantity of assembly order
 * @property string $Notes Notes of assembly order
 * @property SerialNumber[] $SerialNumbers The collection of serial numbers that belongs to the assembled and part items in the assembly order
 */
class FinishAssemblyOrder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'AssemblyOrder';

    protected $fillable = [
        'AssemblyOrder',
        'AssemblyDate',
        'BatchNumbers',
        'Description',
        'Division',
        'FinishOrderQuantity',
        'Notes',
        'SerialNumbers',
    ];

    protected $url = 'inventory/FinishAssemblyOrder';
}
