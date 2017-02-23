<?php namespace Picqer\Financials\Exact;

/**
 * Class TaxScheduleComponent
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=VATTaxScheduleComponents
 * 
 * @property Guid $ID Primary Key
 * @property Guid $Account Account linked to the tax schedule
 * @property String $Code Tax schedule code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Tax schedule description
 * @property Int32 $Division Division
 * @property Guid $GLAccount GLAccount linked to the tax component
 * @property Int32 $LineNumber The sequence in which the tax components are ordered
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
 * @property Guid $TaxComponent Id of the tax component
 * @property TaxComponentRates $TaxComponentRates Collection of Rates for this tax component
 * @property Guid $TaxSchedule Tax schedule to which the tax component is linked
 */
class TaxScheduleComponent extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Account',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'GLAccount',
        'LineNumber',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'TaxComponent',
        'TaxComponentRates',
        'TaxSchedule'
    ];

    protected $url = 'vat/TaxScheduleComponents';

}
