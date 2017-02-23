<?php namespace Picqer\Financials\Exact;

/**
 * Class Operation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingOperations
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code of the operation
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the operation
 * @property Int32 $Division Division code
 * @property Byte $HasSuppliers Indicates if the operation has suppliers associated with it
 * @property Guid $Item Reference to Items table
 * @property String $ItemDescription Description of Item
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Extra remarks
 * @property String $Searchcode Search code for the operation
 * @property Int32 $Status Status of the operation
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
        'Status'
    ];

    protected $url = 'manufacturing/Operations';

}
