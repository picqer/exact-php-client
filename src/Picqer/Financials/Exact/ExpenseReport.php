<?php

namespace Picqer\Financials\Exact;

/**
 * Class ExpenseReport.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ExpenseManagementExpenseReports
 *
 * @property string $ID Primary key
 * @property string $ApprovedDate Date when the expense report was approved
 * @property string $Approver User who approved the expense report
 * @property string $ApproverComment Additional approver comment
 * @property string $ApproverFullName Name of the user who approved the expense report
 * @property string $Claimant The claimant (employee) who owns this expense report
 * @property string $ClaimantFullName Name of the claimant
 * @property string $ControlledDate Date when the expense report was controlled
 * @property string $Controller User who controlled the expense report
 * @property string $ControllerFullName Name of the user who controlled the expense report
 * @property string $Created Date when the expense report was created
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Currency Currency code of the expense report
 * @property string $Description Description of the expense report
 * @property int $Division The division to which the expense report belongs
 * @property int $ExpenseCount Number of expense items in the report
 * @property string $Modified Date when the expense report was last modified
 * @property string $Modifier User ID of the modifier
 * @property string $ModifierFullName Name of the modifier
 * @property string $Notes Notes on the expense report
 * @property string $RejectedDate Date when the expense report was rejected
 * @property string $Rejecter User who rejected the expense report
 * @property string $RejecterFullName Name of the user who rejected the expense report
 * @property int $ReportNumber The expense report number
 * @property int $Status Status of the expense report: 1 = Not reviewed, 2 = Submitted, 3 = Approved, 4 = Rejected, 5 = Finance Approved, 6 = Processed
 * @property string $StatusDescription Status description of the expense report
 * @property string $SubmittedDate Date when the expense report was submitted
 * @property string $Submitter User who submitted the expense report
 * @property string $SubmitterFullName Name of the user who submitted the expense report
 * @property float $TotalAmountDC Total amount of the expense report in division currency
 */
class ExpenseReport extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'ApprovedDate',
        'Approver',
        'ApproverComment',
        'ApproverFullName',
        'Claimant',
        'ClaimantFullName',
        'ControlledDate',
        'Controller',
        'ControllerFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Description',
        'Division',
        'ExpenseCount',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'RejectedDate',
        'Rejecter',
        'RejecterFullName',
        'ReportNumber',
        'Status',
        'StatusDescription',
        'SubmittedDate',
        'Submitter',
        'SubmitterFullName',
        'TotalAmountDC',
    ];

    protected $url = 'expensemanagement/ExpenseReports';
}
