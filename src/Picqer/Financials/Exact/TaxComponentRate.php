<?php namespace Picqer\Financials\Exact;

/**
 * Class TaxComponentRate
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=VATTaxComponentRates
 * 
 * @property Guid $ID Primary Key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division
 * @property DateTime $EndDate The date untill the rate for this component is valid
 * @property Int32 $LineNumber The sequence in which the tax rates are ordered
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Double $Rate Rate
 * @property DateTime $StartDate The date from which the rate is active
 * @property Guid $TaxComponent Tax component to which this tax rate is linked
 */
class TaxComponentRate extends Model
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
        'Rate',
        'StartDate',
        'TaxComponent'
    ];

    protected $url = 'vat/TaxComponentRates';

}
