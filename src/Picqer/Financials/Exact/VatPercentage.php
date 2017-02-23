<?php namespace Picqer\Financials\Exact;

/**
 * Class VatPercentage
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=VATVatPercentages
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property DateTime $EndDate End date of the date range during which this percentage is valid
 * @property Int32 $LineNumber Line number
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $Percentage Percentage
 * @property DateTime $StartDate Start date of the date range during which this percentage is valid
 * @property Int16 $Type 0 = Normal, 1 = Extra duty
 * @property Guid $VATCodeID VAT code
 */
class VatPercentage extends Model
{
    use Query\Findable;

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
        'VATCodeID'
    ];

    protected $url = 'vat/VatPercentages';

}
