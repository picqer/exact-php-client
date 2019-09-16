<?php

namespace Picqer\Financials\Exact;

/**
 * Class Project.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjects
 *
 * @property string $ID Primary key
 * @property string $Account The account for this project
 * @property string $AccountCode Code of Account
 * @property string $AccountContact Contact person of Account
 * @property string $AccountName Name of Account
 * @property bool $AllowAdditionalInvoicing Is additional invoice is allowed for project
 * @property bool $BlockEntry Block time and cost entries
 * @property bool $BlockRebilling Block rebilling
 * @property float $BudgetedAmount Budgeted amount of sales in the default currency of the company
 * @property float $BudgetedCosts Budgeted amount of costs in the default currency of the company
 * @property budgetedhoursperhourtype $BudgetedHoursPerHourType Collection of budgeted hours
 * @property float $BudgetedRevenue Budgeted amount of revenue in the default currency of the company
 * @property int $BudgetOverrunHours BudgetOverrunHours: 10-Allowed, 20-Not Allowed
 * @property int $BudgetType Budget type
 * @property string $BudgetTypeDescription Budget type description
 * @property string $Classification Used only for PSA to link a project classification to the project
 * @property string $ClassificationDescription Description of Classification
 * @property string $Code Code
 * @property float $CostsAmountFC Used only for PSA to store the budgetted costs of a project (except for project type Campaign and Non-billable). Positive quantities only
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CustomerPOnumber Used only for PSA to store the customer's PO number
 * @property string $Description Description of the project
 * @property int $Division Division code
 * @property string $DivisionName Name of Division
 * @property string $EndDate End date of the project. In combination with the start date the status is determined
 * @property string $FixedPriceItem Item used for fixed price invoicing. To be defined per project. If empty the functionality relies on the setting
 * @property string $FixedPriceItemDescription Description of FixedPriceItem
 * @property string $InternalNotes Internal notes not to be printed in invoice
 * @property bool $InvoiceAsQuoted Is invoice as quoted
 * @property invoiceterms $InvoiceTerms Collection of invoice terms
 * @property string $Manager Responsible person for this project
 * @property string $ManagerFullname Name of Manager
 * @property float $MarkupPercentage Purchase markup percentage
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes For additional information about projects
 * @property string $PrepaidItem Used only for PSA. This item is used for prepaid invoicing. If left empty, the functionality relies on a setting
 * @property string $PrepaidItemDescription Description of PrepaidItem
 * @property int $PrepaidType PrepaidType: 1-Retainer, 2-Hour type bundle
 * @property string $PrepaidTypeDescription Description of PrepaidType
 * @property projectrestrictionemployees $ProjectRestrictionEmployees Collection of employee restrictions
 * @property projectrestrictionitems $ProjectRestrictionItems Collection of item restrictions
 * @property projectrestrictionrebillings $ProjectRestrictionRebillings Collection of rebilling restrictions
 * @property float $SalesTimeQuantity Budgeted time. Total number of hours estimated for the fixed price project
 * @property string $SourceQuotation Source quotation
 * @property string $StartDate Start date of a project. In combination with the end date the status is determined
 * @property float $TimeQuantityToAlert Alert when exceeding (Hours)
 * @property int $Type Reference to ProjectTypes
 * @property string $TypeDescription Description of Type
 * @property bool $UseBillingMilestones Using billing milestones
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
        'BudgetOverrunHours',
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
        'InternalNotes',
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
        'UseBillingMilestones',
    ];

    protected $url = 'project/Projects';
}
