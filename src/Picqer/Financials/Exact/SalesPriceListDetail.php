<?php 

namespace Picqer\Financials\Exact;

/**
 * Class SalesPriceListDetail
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesSalesPriceListDetails
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Customer account Id
 * @property String $AccountName Customer account name
 * @property Guid $BasePrice Standard price
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency
 * @property Double $Discount Discount
 * @property Int32 $Division Division code
 * @property DateTime $EndDate End date
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
class SalesPriceListDetail extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'BasePrice',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Discount',
        'Division',
        'EndDate',
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
