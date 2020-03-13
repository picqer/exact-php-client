<?php

namespace Picqer\Financials\Exact;

/**
 * Class SolutionLink.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancySolutionLinks
 *
 * @property string $ID Primary key
 * @property string $Account ID of account to which solution is linked
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property int $Division Accountant main division
 * @property int $ExternalSolutionCode If type is external predefined, represents ID of PracticeManagementExternalSolutions (mandatory for External solution)
 * @property string $ExternalSolutionName Name of the external solution
 * @property string $ExternalSolutionUrl Customer URl in external solution, like solution.com/id123 (mandatory for External and ExternalOther solution)
 * @property int $InternalSolutionDivision Division code of linked internal solution (mandatory for Internal solution)
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $Name Name of the solution link
 * @property string $OtherExternalSolutionName Name of the custom external solution (mandatory for ExternalOther solution)
 * @property int $SolutionType Type of solution: 0 - Internal(EOL), 1 - External(Wellknown solution), 2 - ExternalOther
 * @property int $Status Link status: 0 - Active, 1 - Inactive, 2 -Archived
 */
class SolutionLink extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'Created',
        'Creator',
        'Division',
        'ExternalSolutionCode',
        'ExternalSolutionName',
        'ExternalSolutionUrl',
        'InternalSolutionDivision',
        'Modified',
        'Modifier',
        'Name',
        'OtherExternalSolutionName',
        'SolutionType',
        'Status',
    ];

    protected $url = 'accountancy/SolutionLinks';
}
