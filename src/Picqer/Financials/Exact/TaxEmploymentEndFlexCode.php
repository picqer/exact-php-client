<?php

namespace Picqer\Financials\Exact;

/**
 * Class TaxEmploymentEndFlexCode.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollTaxEmploymentEndFlexCodes
 *
 * @property string $ID Primary key
 * @property string $Code Code of flexible employment contract phase
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of flexible employment contract phase
 * @property string $EndDate End date of flexible employment contract
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $StartDate Start date of flexible employment contract phase
 */
class TaxEmploymentEndFlexCode extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'StartDate',
    ];

    protected $url = 'payroll/TaxEmploymentEndFlexCodes';
}
