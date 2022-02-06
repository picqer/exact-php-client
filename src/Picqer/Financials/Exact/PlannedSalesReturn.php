<?php

namespace Picqer\Financials\Exact;

/**
 * Class PlannedSalesReturn.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderPlannedSalesReturns
 *
 * @property string $PlannedSalesReturnID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $DeliveredTo Reference to the customer where item is delivered to/customer returning items
 * @property string $DeliveredToContactPerson Reference to the contact person of customer where item is delivered to/customer returning items
 * @property string $DeliveredToContactPersonFullName Name of contact person of delivered to customer
 * @property string $DeliveredToName Name of delivered to customer
 * @property string $DeliveryAddress Delivered to address
 * @property string $Description Description of the planned sales return
 * @property int $Division Division code
 * @property string $Document Document that is manually linked to the planned sales return
 * @property string $DocumentSubject Subject of Document
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property PlannedSalesReturnLine[] $PlannedSalesReturnLines Collection of planned sales return lines
 * @property string $Remarks Remarks
 * @property string $ReturnDate Date of planned sales return
 * @property int $ReturnNumber Human readable id of the planned sales return
 * @property int $Source Source of planned sales return entry: 1-Manual entry, 2-Web service
 * @property int $Status Planned sales return status: 20-Open, 30-Confirmed, 50-Processed
 * @property string $Warehouse ID of warehouse to receive the returning items
 * @property string $WarehouseCode Code of warehouse to receive the returning items
 * @property string $WarehouseDescription Description of warehouse to receive the returning items
 */
class PlannedSalesReturn extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'PlannedSalesReturnID';

    protected $fillable = [
        'PlannedSalesReturnID',
        'Created',
        'Creator',
        'CreatorFullName',
        'DeliveredTo',
        'DeliveredToContactPerson',
        'DeliveredToContactPersonFullName',
        'DeliveredToName',
        'DeliveryAddress',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PlannedSalesReturnLines',
        'Remarks',
        'ReturnDate',
        'ReturnNumber',
        'Source',
        'Status',
        'Warehouse',
        'WarehouseCode',
        'WarehouseDescription',
    ];

    protected $url = 'salesorder/PlannedSalesReturns';
}
