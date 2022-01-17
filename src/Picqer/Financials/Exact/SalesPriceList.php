<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesPriceList.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesSalesPriceLists
 *
 * @property string $ID Primary key. Price list ID
 * @property string $Code Price list code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency All prices in the price list are stored in this currency
 * @property string $Description Price list description
 * @property int $Division Division code
 * @property int $Entity Indicates the entity (1 - Item, 2 - Item group) on which this price list is based
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Explanation or extra information can be stored in the notes
 * @property int $Type Indicates the type (1 - Customer, 2 - Standard) on which this price list applies
 */
class SalesPriceList extends Model
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
        'Entity',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Type',
    ];

    protected $url = 'sales/SalesPriceLists';
}
