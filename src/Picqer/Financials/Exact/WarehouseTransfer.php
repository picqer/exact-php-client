<?php

namespace Picqer\Financials\Exact;

/**
 * Class WarehouseTransfer.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=InventoryWarehouseTransfers
 *
 * @property string $TransferID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $EntryDate Entry Date
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PlannedDeliveryDate Planned delivery date / Planned transfer date It shows the date the items will be sent for transfer delivery.
 * @property string $PlannedReceiptDate Planned receipt date It shows the date the items will arrive at the warehouse location.
 * @property string $Remarks Remarks
 * @property int $Source Source of warehouse transfer entry: 1-Manual entry, 2-Import, 3-Transfer advice, 4-Web service
 * @property int $Status Warehouse transfer status: 10-Draft, 50-Processed
 * @property string $TransferDate Transfer Date of the processed warehouse transfer
 * @property int $TransferNumber Transfer Number
 * @property string $WarehouseFrom ID of warehouse to transfer item from
 * @property string $WarehouseFromCode Code of warehouse to transfer item from
 * @property string $WarehouseFromDescription Description of warehouse to transfer item from
 * @property string $WarehouseTo ID of warehouse to transfer item to
 * @property string $WarehouseToCode Code of warehouse to transfer item to
 * @property string $WarehouseToDescription Description of warehouse to transfer item to
 * @property warehousetransferlines $WarehouseTransferLines Collection of warehouse transfer lines
 */
class WarehouseTransfer extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'TransferID';

    protected $fillable = [
        'TransferID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EntryDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PlannedDeliveryDate',
        'PlannedReceiptDate',
        'Remarks',
        'Source',
        'Status',
        'TransferDate',
        'TransferNumber',
        'WarehouseFrom',
        'WarehouseFromCode',
        'WarehouseFromDescription',
        'WarehouseTo',
        'WarehouseToCode',
        'WarehouseToDescription',
        'WarehouseTransferLines',
    ];

    protected $url = 'inventory/WarehouseTransfers';
}
