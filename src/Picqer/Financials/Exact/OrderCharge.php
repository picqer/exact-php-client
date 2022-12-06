<?php

namespace Picqer\Financials\Exact;

/**
 * Class OrderCharge.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesOrderCharges
 *
 * @property string $ID Primary key
 * @property bool $Active Active
 * @property float $Amount Amount of order charge
 * @property string $Code Code of the order charge
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of order charge
 * @property int $Division Division code
 * @property string $GLAccount ID of GLAccount
 * @property string $GLAccountCode Code of GLAccount
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $VATCode VAT Code
 * @property string $VATDescription Description of VAT Code
 * @property float $VATPercentage The VAT Percentage of the VAT Code
 */
class OrderCharge extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Active',
        'Amount',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'GLAccount',
        'GLAccountCode',
        'GLAccountDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'VATCode',
        'VATDescription',
        'VATPercentage',
    ];

    protected $url = 'sales/OrderCharges';
}
