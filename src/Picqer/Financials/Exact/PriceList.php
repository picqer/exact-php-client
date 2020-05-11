<?php

namespace Picqer\Financials\Exact;

/**
 * Class PriceList.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesPriceLists
 *
 * @property string $ID Primary key
 * @property string $Code Code to indicate the price list
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency All prices in the price list are stored in this currency
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $DivisionDescription Description of Division
 * @property int $Entity Indicates the entity (Item, Item group, ..) on which this price list is based
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Explanation or extra information can be stored in the notes
 */
class PriceList extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'Notes',
    ];

    protected $url = 'sales/PriceLists';
}
