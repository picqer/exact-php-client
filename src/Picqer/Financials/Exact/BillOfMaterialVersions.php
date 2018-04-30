<?php

namespace Picqer\Financials\Exact;

/**
 * Class BillOfMaterialVersions
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingBillOfMaterialVersions
 *
 * @property Guid $ID Primary key
 * @property Double $BatchQuantity Batch Quantity of Item Version
 * @property String $CadDrawingUrl Cad drawing URL
 * @property Double $CalculatedCostPrice Calculated Cost Price of Item Version
 * @property Date $CreatedTime Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the item version
 * @property Int32 $Division Division code
 * @property Byte $IsDefault Indicates if this is the default item version that will be assigned when a item is selected
 * @property Guid $Item Reference to Items table
 * @property String $ItemDescription Description of Item
 * @property Date $ModifiedTime Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Line notes
 * @property Int32 $OrderLeadDays Order lead days for item
 * @property Int32 $ProductionLeadDays Production lead time in days of Item version
 * @property Int16 $Status Statuses of Item version: 10-Engineering change pending, 20-Engineering change approved, 30-Active & 40-Historic
 * @property String $StatusDescription Description of Status
 * @property Int16 $Type Type of Item version: 10-Sales bill of material, 20-Manufacturing recipe
 * @property String $TypeDescription Description of Type
 * @property Date $VersionDateTime Version date
 * @property Int32 $VersionNumber Version Number
 */
class BillOfMaterialVersions extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'ID';

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
        'VersionNumber'
    ];

    protected $url = 'manufacturing/BillOfMaterialVersions';
}