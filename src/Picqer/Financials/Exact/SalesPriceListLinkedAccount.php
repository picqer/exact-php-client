<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesPriceListLinkedAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesSalesPriceListLinkedAccounts
 *
 * @property string $ID Primary key. Customer account ID
 * @property string $Code Customer account code, fixed length numeric string with leading spaces, length 18. IMPORTANT: When you use OData $filter on this field you have to make sure the filter parameter contains the leading spaces
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Name Customer account name
 * @property string $PriceList Price list ID
 */
class SalesPriceListLinkedAccount extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Name',
        'PriceList',
    ];

    protected $url = 'sales/SalesPriceListLinkedAccounts';
}
