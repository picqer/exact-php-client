<?php

namespace Picqer\Financials\Exact;

/**
 * Class Operation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingOperations
 *
 * @property string $ID Primary key
 * @property string $Code Code of the operation
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the operation
 * @property int $Division Division code
 * @property int $HasSuppliers Indicates if the operation has suppliers associated with it
 * @property string $Item Reference to Items table
 * @property string $ItemDescription Description of Item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra remarks
 * @property string $Searchcode Search code for the operation
 * @property int $Status Status of the operation
 */
class Operation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'HasSuppliers',
        'Item',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Searchcode',
        'Status',
    ];

    protected $url = 'manufacturing/Operations';
}
