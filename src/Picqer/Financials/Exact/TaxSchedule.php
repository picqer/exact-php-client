<?php namespace Picqer\Financials\Exact;

/**
 * Class TaxSchedule
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=VATTaxSchedules
 * 
 * @property Guid $ID Primary key
 * @property String $Code Tax schedule code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Tax schedule description
 * @property Int32 $Division Division
 * @property Byte $IsBlocked Indicates if the tax schedule is blocked, 0 = not blocked, 1 = blocked
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes for the tax schedule
 * @property Int16 $Type The type of tax schedule, 10=Single, 20=Combined
 */
class TaxSchedule extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'IsBlocked',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Type'
    ];

    protected $url = 'vat/TaxSchedules';

}
