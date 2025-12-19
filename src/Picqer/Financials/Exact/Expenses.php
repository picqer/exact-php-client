<?php

namespace Picqer\Financials\Exact;

/**
 * Class Expenses.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ExpenseManagementExpenses
 *
 * @property string $ID Expense ID
 * @property string $ApproverComment Approver comment (alternative field)
 * @property string $Category Category of the expense
 * @property string $CategoryDescription Category description
 * @property string $Claimant User who made the expense
 * @property string $ClaimantFullName Full name of the user who made the expense
 * @property string $Country Country code (3 characters)
 * @property string $Currency Currency code (3 characters)
 * @property string $Description Description of the expense
 * @property string $Distance Distance (for mileage expenses)
 * @property int $Division Division expense belong to
 * @property string $ExpenseDate Date of the expense
 * @property ExpenseLine[] $ExpenseLines Expense lines for Receipt expenses (split amounts)
 * @property int $ExpenseNumber Expense number - auto-generated
 * @property int $ExpenseType Expense type: 1=Receipts, 2=Mileage, 3=Per Diem
 * @property string $ExpenseTypeDescription Expense type description
 * @property int $PaymentMethod Payment method (0:Others , 1=Company Credit Card)
 * @property string $PerDiemRateAmount Per diem rate amount
 * @property string $Project Project associated with the expense
 * @property string $ProjectDescription Project description
 * @property int $Quantity Quantity
 * @property float $RateFC Rate in foreign currency
 * @property string $Report Associated expense report
 * @property string $ReportDescription Expense report description
 * @property int $Status Status: 1=Not reviewed, 2=Reviewed, 3=Flagged
 * @property string $StatusDescription Status description
 * @property string $SysCreated Created date
 * @property string $SysCreator Creator
 * @property string $SysCreatorFullName Creator full name
 * @property string $SysModified Modified date
 * @property string $SysModifier Modifier
 * @property string $SysModifierFullName Modifier full name
 * @property float $TotalAmountDC Total amount in division currency
 * @property float $TotalAmountFC Total amount in foreign currency
 * @property string $Vendor Vendor name
 * @property Waypoint[] $Waypoints Waypoints for Mileage expenses (route tracking)
 */
class Expenses extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'ApproverComment',
        'Category',
        'CategoryDescription',
        'Claimant',
        'ClaimantFullName',
        'Country',
        'Currency',
        'Description',
        'Distance',
        'Division',
        'ExpenseDate',
        'ExpenseLines',
        'ExpenseNumber',
        'ExpenseType',
        'ExpenseTypeDescription',
        'PaymentMethod',
        'PerDiemRateAmount',
        'Project',
        'ProjectDescription',
        'Quantity',
        'RateFC',
        'Report',
        'ReportDescription',
        'Status',
        'StatusDescription',
        'SysCreated',
        'SysCreator',
        'SysCreatorFullName',
        'SysModified',
        'SysModifier',
        'SysModifierFullName',
        'TotalAmountDC',
        'TotalAmountFC',
        'Vendor',
        'Waypoints',
    ];

    protected $url = 'expensemanagement/Expenses';
}
