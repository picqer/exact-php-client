<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostTransaction.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectCostTransactions
 *
 * @property string $ID Primary key
 * @property string $Account Guid ID of account that is linked to the project
 * @property string $AccountName Name of account that is linked to the project
 * @property float $AmountFC Calculated amount of the transaction based on (Quantity * PriceFC)
 * @property string $Attachment Attachment linked to the transaction (not mandatory)
 * @property string $Created Date and time the transaction was created
 * @property string $Creator The Guid ID of user that created the transaction
 * @property string $CreatorFullName The full name of the user
 * @property string $Currency Currency of amount FC
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Date Date and time the cost transaction was done
 * @property int $Division Division code
 * @property string $DivisionDescription Description of Division
 * @property string $Employee Guid ID of the employee that is linked to the cost transaction
 * @property int $EntryNumber Number that represents the grouping of cost transactions
 * @property string $ErrorText (Only used by backgroundjobs) To determine which transaction has an error
 * @property string $Expense ProjectWBS (work breakdown structure) type 3
 * @property string $ExpenseDescription Description of ProjectWBS Expense
 * @property int $HourStatus Status of the transaction: 1 = Draft, 2 = Rejected, 10 = Submitted, 11 = Failed on approval, 14 = Processing, 16 = Processing, 19 = Failed while undoing approval, 20 = Final
 * @property string $Item Item that is linked to the transaction, which provides the cost information
 * @property string $ItemDescription Description of the item that is linked to the transaction
 * @property bool $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property string $Modified The date and time transaction record was modified
 * @property string $Modifier The ID of the user that modified the records
 * @property string $ModifierFullName The full name of the user that modified the record
 * @property string $Notes Notes linked to the transaction for providing additional information (not mandatory)
 * @property float $PriceFC For use in AmountFC (Quantiy * Price FC)
 * @property string $Project Project that is linked to the transaction
 * @property string $ProjectAccount Project account ID that is linked to the transaction (not mandatory)
 * @property string $ProjectAccountCode Project account code that is linked to the transaction
 * @property string $ProjectAccountName Project account name that is linked to the transaction
 * @property string $ProjectDescription Project description that is linked to the transaction
 * @property float $Quantity Quantity of the item that is linked to the transaction
 * @property string $Subscription Subscription that is linked to the transaction
 * @property string $SubscriptionAccount Subscription account that is linked to the transaction, this is to identify the referenced subscription
 * @property string $SubscriptionAccountCode Subscription account code that is linked to the transaction
 * @property string $SubscriptionAccountName Subscription account name that is linked to the transaction
 * @property string $SubscriptionDescription Subscription description that is linked to the transaction
 * @property int $SubscriptionNumber Subscription number that is linked to the transaction
 * @property int $Type The type of transaction. E.g: Time = 1, Cost = 2
 */
class CostTransaction extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'AmountFC',
        'Attachment',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CustomField',
        'Date',
        'Division',
        'DivisionDescription',
        'Employee',
        'EntryNumber',
        'ErrorText',
        'Expense',
        'ExpenseDescription',
        'HourStatus',
        'Item',
        'ItemDescription',
        'ItemDivisable',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PriceFC',
        'Project',
        'ProjectAccount',
        'ProjectAccountCode',
        'ProjectAccountName',
        'ProjectDescription',
        'Quantity',
        'Subscription',
        'SubscriptionAccount',
        'SubscriptionAccountCode',
        'SubscriptionAccountName',
        'SubscriptionDescription',
        'SubscriptionNumber',
        'Type',
    ];

    protected $url = 'project/CostTransactions';
}
