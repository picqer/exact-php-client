<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesPriceListDetails
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesSalesPriceListDetails
 *
 * @property Guid $ID Primary key
 * @property Guid $Account Customer account Id
 * @property String $AccountName ID of the base price.
 * @property Guid $BasePrice ID of the base price.
 * @property Double $BasePriceAmount Amount of the base price
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency
 * @property Double $Discount Discount
 * @property Int32 $Division Division code
 * @property DateTime $EndDate End date
 * @property Int16 $EntryMethod Indicates whether discount or the new price is leading
 * @property Guid $Item Item
 * @property String $ItemDescription Description of the item
 * @property Guid $ItemGroup ItemGroup
 * @property String $ItemUnit Default sales unit of the item
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $NewPrice New price after discount
 * @property Double $NumberOfItemsPerUnit Number of the item per unit
 * @property String $PriceListCode Code of the PriceList
 * @property Guid $PriceListId Id of the PriceList
 * @property Double $Quantity Quantity
 * @property DateTime $StartDate Start date
 * @property String $Unit Unit
 */
class SalesPriceListDetails extends Model
{

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'BasePrice',
        'BasePriceAmount',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Discount',
        'Division',
        'EndDate',
        'EntryMethod',
        'Item',
        'ItemDescription',
        'ItemGroup',
        'ItemUnit',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'NewPrice',
        'NumberOfItemsPerUnit',
        'PriceListCode',
        'PriceListId',
        'Quantity',
        'StartDate',
        'Unit'
    ];

    protected $url = 'sales/SalesPriceListDetails';
}
