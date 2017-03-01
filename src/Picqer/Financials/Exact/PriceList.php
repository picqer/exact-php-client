<?php 

namespace Picqer\Financials\Exact;

/**
 * Class PriceList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesPriceLists
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code to indicate the price list
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency All prices in the price list are stored in this currency
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property String $DivisionDescription Description of Division
 * @property Int16 $Entity Indicates the entity (Item, Item group, ..) on which this price list is based
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Explanation or extra information can be stored in the notes
 */
class PriceList extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Description',
        'Division',
        'DivisionDescription',
        'Entity',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes'
    ];

    protected $url = 'sales/PriceLists';

}
