<?php

namespace Picqer\Financials\Exact;

/**
 * Class ItemVersion.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsItemVersions
 *
 * @property string $ID Primary key
 * @property float $BatchQuantity Batch Quantity of Item Version
 * @property float $CalculatedCostPrice Calculated Cost Price of Item Version
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the item version
 * @property int $Division Division code
 * @property int $IsDefault Indicates if this is the default item version that will be assigned when a item is selected
 * @property string $Item Reference to Items table
 * @property string $ItemDescription Description of Item
 * @property int $LeadTime Lead time of Item version
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Line notes
 * @property int $Status Statuses of Item version: 10-Engineering change pending, 20-Engineering change approved, 30-Active & 40-Historic
 * @property string $StatusDescription Description of Status
 * @property int $Type Type of Item version: 10-Sales bill of material, 20-Manufacturing recipe
 * @property string $TypeDescription Description of Type
 * @property int $VersionNumber Version Number
 */
class ItemVersion extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'BatchQuantity',
        'CalculatedCostPrice',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'IsDefault',
        'Item',
        'ItemDescription',
        'LeadTime',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Status',
        'StatusDescription',
        'Type',
        'TypeDescription',
        'VersionNumber',
    ];

    protected $url = 'logistics/ItemVersions';
}
