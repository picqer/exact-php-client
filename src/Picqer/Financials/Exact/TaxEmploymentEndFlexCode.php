<?php 

namespace Picqer\Financials\Exact;

/**
 * Class TaxEmploymentEndFlexCode
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollTaxEmploymentEndFlexCodes
 * 
 * @property Guid $ID Primary key
 * @property String $Code Code of flexible employment contract phase
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of flexible employment contract phase
 * @property DateTime $EndDate End date of flexible employment contract
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property DateTime $StartDate Start date of flexible employment contract phase
 */
class TaxEmploymentEndFlexCode extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'EndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'StartDate'
    ];

    protected $url = 'payroll/TaxEmploymentEndFlexCodes';

}
