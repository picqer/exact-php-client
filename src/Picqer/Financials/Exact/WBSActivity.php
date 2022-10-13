<?php

namespace Picqer\Financials\Exact;

/**
 * Class WBSActivity.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectWBSActivities
 *
 * @property string $ID Primary key
 * @property bool $AutoCreateInvoiceTerm To indicated auto create invoice term when invoice method is Fixed price
 * @property bool $BlockEntry To indicated if time and cost entries is blocked
 * @property float $BudgetedCost Budget cost of the WBS activity
 * @property float $BudgetedHours Budget hours of the WBS
 * @property float $BudgetedRevenue Revenue of the WBS activity
 * @property int $BudgetOverrunHours BudgetOverrunHours: 10-Allowed, 20-Not Allowed
 * @property bool $Completed To indicated if the WBS activity is completed
 * @property string $Created The date and time when the WBS activity was created
 * @property string $Creator The ID of the user that created the WBS activity
 * @property string $CreatorFullName The full name of the user that created the WBS activity
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $DefaultItem Default Item to used for time entry
 * @property bool $DefaultItemIsMandatory To indicated if only default item is allowed
 * @property string $Description Description of the WBS activity
 * @property int $Division Division code
 * @property string $EndDate End date of the WBS activity
 * @property string $InvoiceDate The invoice date of the WBS when auto create invoice term
 * @property int $InvoiceMethod The invoice method of the WBS. E.g: 2 = Fixed price, 3 = Time and Material, 4 = Non billable, 5 = Prepaid
 * @property bool $InvoiceSeparately To indicated if additional invoice is allowed on this WBS expense. Additional invoice can only be set when the project type is fixed price or prepaid and the project allow additional invoices.
 * @property string $InvoiceTerm ID of the invoice term that linked to the WBS
 * @property string $Modified The date when the WBS activity was modified
 * @property string $Modifier The ID of the user that modified the WBS activity
 * @property string $ModifierFullName The full name of the user that modified the WBS activity
 * @property string $Notes For additional information
 * @property string $PartOf ID of the WBS activity part of
 * @property string $PartOfDescription Description of part of
 * @property string $Project ID of the project that linked to WBS activity
 * @property string $ProjectDescription Project description that is linked to WBS activity
 * @property int $SequenceNumber Sequence number of the WBS activity. Last sequence will be selected if not specified
 * @property string $StartDate Start date of the WBS activity
 * @property float $TimeQuantityToAlert Alert when exceeding this time quantity
 */
class WBSActivity extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AutoCreateInvoiceTerm',
        'BlockEntry',
        'BudgetedCost',
        'BudgetedHours',
        'BudgetedRevenue',
        'BudgetOverrunHours',
        'Completed',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomField',
        'DefaultItem',
        'DefaultItemIsMandatory',
        'Description',
        'Division',
        'EndDate',
        'InvoiceDate',
        'InvoiceMethod',
        'InvoiceSeparately',
        'InvoiceTerm',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PartOf',
        'PartOfDescription',
        'Project',
        'ProjectDescription',
        'SequenceNumber',
        'StartDate',
        'TimeQuantityToAlert',
    ];

    protected $url = 'project/WBSActivities';
}
