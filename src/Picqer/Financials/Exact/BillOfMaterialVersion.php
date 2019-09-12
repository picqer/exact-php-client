<?php

namespace Picqer\Financials\Exact;

/**
 * Class BillOfMaterialVersion
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingBillOfMaterialVersions
 *
 * @property string $ID Primary key
 * @property float $BatchQuantity Batch Quantity of Item Version
 * @property string $CadDrawingUrl Cad drawing URL
 * @property float $CalculatedCostPrice Calculated Cost Price of Item Version
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the item version
 * @property int $Division Division code
 * @property int $IsDefault Indicates if this is the default item version that will be assigned when a item is selected
 * @property string $Item Reference to Items table
 * @property string $ItemDescription Description of Item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Line notes
 * @property int $OrderLeadDays Order lead days for item
 * @property int $ProductionLeadDays Production lead time in days of Item version
 * @property int $Status Statuses of Item version: 10-Engineering change pending, 20-Engineering change approved, 30-Active & 40-Historic
 * @property string $StatusDescription Description of Status
 * @property int $Type Type of Item version: 10-Sales bill of material, 20-Manufacturing recipe
 * @property string $TypeDescription Description of Type
 * @property string $VersionDate Version date
 * @property int $VersionNumber Version Number
 */
class BillOfMaterialVersion extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchQuantity',
        'CadDrawingUrl',
        'CalculatedCostPrice',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'IsDefault',
        'Item',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'OrderLeadDays',
        'ProductionLeadDays',
        'Status',
        'StatusDescription',
        'Type',
        'TypeDescription',
        'VersionDate',
        'VersionNumber',
    ];

    protected $url = 'manufacturing/BillOfMaterialVersions';
}
