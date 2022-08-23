<?php

namespace Picqer\Financials\Exact;

/**
 * Class CustomerItem.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsCustomerItems
 *
 * @property string $ID Primary key
 * @property string $Account ID of the customer
 * @property string $AccountCode Code of the customer account
 * @property string $AccountName Name of the customer account
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CustomerItemCode Customer’s item code
 * @property int $Division Division code
 * @property string $Item Item ID
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of Item
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 */
class CustomerItem extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomerItemCode',
        'Division',
        'Item',
        'ItemCode',
        'ItemDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'logistics/CustomerItems';
}
