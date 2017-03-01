<?php 

namespace Picqer\Financials\Exact;

/**
 * Class SolutionLink
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancySolutionLinks
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account ID of account to which solution is linked
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property Int32 $Division Accountant main division
 * @property Int32 $ExternalSolutionCode If type is external predefined, represents ID of PracticeManagementExternalSolutions (mandatory for External solution)
 * @property String $ExternalSolutionName Name of the external solution
 * @property String $ExternalSolutionUrl Customer URl in external solution, like solution.com/id123 (mandatory for External and ExternalOther solution)
 * @property Int32 $InternalSolutionDivision Division code of linked internal solution (mandatory for Internal solution)
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $Name Name of the solution link
 * @property String $OtherExternalSolutionName Name of the custom external solution (mandatory for ExternalOther solution)
 * @property Int32 $SolutionType Type of solution: 0 - Internal(EOL), 1 - External(Wellknown solution), 2 - ExternalOther
 * @property Int32 $Status Link status: 0 - Active, 1 - Inactive, 2 -Archived
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
        'Status'
    ];

    protected $url = 'accountancy/SolutionLinks';

}
