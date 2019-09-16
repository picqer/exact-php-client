<?php

namespace Picqer\Financials\Exact;

/**
 * Class VatPercentage.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=VATVatPercentages
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $EndDate End date of the date range during which this percentage is valid
 * @property int $LineNumber Line number
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property float $Percentage Percentage
 * @property string $StartDate Start date of the date range during which this percentage is valid
 * @property int $Type 0 = Normal, 1 = Extra duty
 * @property string $VATCodeID VAT code
 */
class VatPercentage extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'EndDate',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Percentage',
        'StartDate',
        'Type',
        'VATCodeID',
    ];

    protected $url = 'vat/VatPercentages';
}
