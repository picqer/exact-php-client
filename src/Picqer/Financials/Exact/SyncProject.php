<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncProjectProjects
 *
 * @property int $Timestamp Timestamp
 * @property string $Account The account for this project
 * @property string $AccountCode Code of Account
 * @property string $AccountContact Contact person of Account
 * @property string $AccountName Name of Account
 * @property bool $AllowAdditionalInvoicing Indicates if additional invoice is allowed for project
 * @property bool $BlockEntry Block time and cost entries
 * @property bool $BlockPlanning Block planning and reservations
 * @property bool $BlockPurchasing Block purchasing
 * @property bool $BlockRebilling Block rebilling
 * @property float $BudgetedAmount Budgeted amount of sales in the default currency of the company
 * @property float $BudgetedCosts Budgeted amount of costs in the default currency of the company
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
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Description Description of the project
 * @property int $Division Division code
 * @property string $DivisionName Name of Division
 * @property string $EndDate End date of the project. In combination with the start date the status is determined
 * @property string $FixedPriceItem Item used for fixed price invoicing. To be defined per project. If empty the functionality relies on the setting
 * @property string $FixedPriceItemDescription Description of FixedPriceItem
 * @property bool $HasWBSLines Indicates if whether the Project has WBS
 * @property string $ID Primary key
 * @property int $IncludeInvoiceSpecification Include invoice specification. E.g: 1 = Based on account, 2 = Always, 3 = Never
 * @property bool $IncludeSpecificationInInvoicePdf Indicates whether to include invoice specification in invoice PDF
 * @property string $InternalNotes Internal notes not to be printed in invoice
 * @property string $InvoiceAddress Invoice address
 * @property bool $InvoiceAsQuoted Indicates whether the project is invoice as quoted
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
 * @property float $SalesTimeQuantity Budgeted time. Total number of hours estimated for the fixed price project
 * @property string $SourceQuotation Source quotation
 * @property string $StartDate Start date of a project. In combination with the end date the status is determined
 * @property float $TimeQuantityToAlert Alert when exceeding (Hours)
 * @property int $Type Reference to ProjectTypes. E.g: 1 = Campaign , 2 = Fixed Price, 3 = Time and Material, 4 = Non billable, 5 = Prepaid
 * @property string $TypeDescription Description of Type
 * @property bool $UseBillingMilestones Indicates whether the Project is using billing milestones
 */
class SyncProject extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Account',
        'AccountCode',
        'AccountContact',
        'AccountName',
        'AllowAdditionalInvoicing',
        'BlockEntry',
        'BlockPlanning',
        'BlockPurchasing',
        'BlockRebilling',
        'BudgetedAmount',
        'BudgetedCosts',
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
        'CustomField',
        'Description',
        'Division',
        'DivisionName',
        'EndDate',
        'FixedPriceItem',
        'FixedPriceItemDescription',
        'HasWBSLines',
        'ID',
        'IncludeInvoiceSpecification',
        'IncludeSpecificationInInvoicePdf',
        'InternalNotes',
        'InvoiceAddress',
        'InvoiceAsQuoted',
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
        'SalesTimeQuantity',
        'SourceQuotation',
        'StartDate',
        'TimeQuantityToAlert',
        'Type',
        'TypeDescription',
        'UseBillingMilestones',
    ];

    protected $url = 'sync/Project/Projects';
}
