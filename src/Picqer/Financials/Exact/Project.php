<?php

namespace Picqer\Financials\Exact;

/**
 * Class Project
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjects
 *
 * @property Guid $ID Primary key
 * @property Guid $Account The account for this project
 * @property String $AccountCode Code of Account
 * @property Guid $AccountContact Contact person of Account
 * @property String $AccountName Name of Account
 * @property Boolean $AllowAdditionalInvoicing Is additional invoice is allowed for project
 * @property Boolean $BlockEntry Block time and cost entries
 * @property Boolean $BlockRebilling Block rebilling
 * @property Double $BudgetedAmount Budgeted amount of sales in the default currency of the company
 * @property Double $BudgetedCosts Budgeted amount of costs in the default currency of the company
 * @property BudgetedHoursPerHourType $BudgetedHoursPerHourType Collection of budgeted hours
 * @property Double $BudgetedRevenue Budgeted amount of revenue in the default currency of the company
 * @property Int16 $BudgetType Budget type
 * @property String $BudgetTypeDescription Budget type description
 * @property Guid $Classification Used only for PSA to link a project classification to the project
 * @property String $ClassificationDescription Description of Classification
 * @property String $Code Code
 * @property Double $CostsAmountFC Used only for PSA to store the budgetted costs of a project (except for project type Campaign and Non-billable). Positive quantities only
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $CustomerPOnumber Used only for PSA to store the customer's PO number
 * @property String $Description Description of the project
 * @property Int32 $Division Division code
 * @property String $DivisionName Name of Division
 * @property DateTime $EndDate End date of the project. In combination with the start date the status is determined
 * @property Guid $FixedPriceItem Item used for fixed price invoicing. To be defined per project. If empty the functionality relies on the setting
 * @property String $FixedPriceItemDescription Description of FixedPriceItem
 * @property Boolean $InvoiceAsQuoted Is invoice as quoted
 * @property InvoiceTerms $InvoiceTerms Collection of invoice terms
 * @property Guid $Manager Responsible person for this project
 * @property String $ManagerFullname Name of Manager
 * @property Double $MarkupPercentage Purchase markup percentage
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes For additional information about projects
 * @property Guid $PrepaidItem Used only for PSA. This item is used for prepaid invoicing. If left empty, the functionality relies on a setting
 * @property String $PrepaidItemDescription Description of PrepaidItem
 * @property Int16 $PrepaidType Reference to ProjectPrepaidTypes
 * @property String $PrepaidTypeDescription Description of PrepaidType
 * @property ProjectRestrictionEmployees $ProjectRestrictionEmployees Collection of employee restrictions
 * @property ProjectRestrictionItems $ProjectRestrictionItems Collection of item restrictions
 * @property ProjectRestrictionRebillings $ProjectRestrictionRebillings Collection of rebilling restrictions
 * @property Double $SalesTimeQuantity Budgeted time. Total number of hours estimated for the fixed price project
 * @property Guid $SourceQuotation Source quotation
 * @property DateTime $StartDate Start date of a project. In combination with the end date the status is determined
 * @property Double $TimeQuantityToAlert
 * @property Int32 $Type Reference to ProjectTypes
 * @property String $TypeDescription Description of Type
 * @property Boolean $UseBillingMilestones Using billing milestones
 */
class Project extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountContact',
        'AccountName',
        'AllowAdditionalInvoicing',
        'BlockEntry',
        'BlockRebilling',
        'BudgetedAmount',
        'BudgetedCosts',
        'BudgetedHoursPerHourType',
        'BudgetedRevenue',
        'BudgetType',
        'BudgetTypeDescription',
        'Classification',
        'ClassificationDescription',
        'Code',
        'CostsAmountFC',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomerPOnumber',
        'Description',
        'Division',
        'DivisionName',
        'EndDate',
        'FixedPriceItem',
        'FixedPriceItemDescription',
        'InvoiceAsQuoted',
        'InvoiceTerms',
        'Manager',
        'ManagerFullname',
        'MarkupPercentage',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PrepaidItem',
        'PrepaidItemDescription',
        'PrepaidType',
        'PrepaidTypeDescription',
        'ProjectRestrictionEmployees',
        'ProjectRestrictionItems',
        'ProjectRestrictionRebillings',
        'SalesTimeQuantity',
        'SourceQuotation',
        'StartDate',
        'TimeQuantityToAlert',
        'Type',
        'TypeDescription',
        'UseBillingMilestones'
    ];

    protected $url = 'project/Projects';
}