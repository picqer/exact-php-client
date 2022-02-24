<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeCostTransaction.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncProjectTimeCostTransactions
 *
 * @property int $Timestamp Timestamp
 * @property string $Account Guid ID of account that is linked to the project
 * @property string $AccountName Name of account that is linked to the project
 * @property float $AmountFC Calculated amount of the transaction based on (Quantity * PriceFC)
 * @property string $Attachment Attachment linked to the transaction (not mandatory)
 * @property string $Created Date and time the transaction was created
 * @property string $Creator The Guid ID of user that created the transaction
 * @property string $CreatorFullName The full name of the user that created the record
 * @property string $Currency Currency of amount FC
 * @property string $Date Date and time the transaction was done
 * @property int $Division Division code
 * @property string $DivisionDescription Description of Division
 * @property string $Employee Guid ID of the employee that is linked to the transaction
 * @property string $EndTime End time of the time transaction
 * @property int $EntryNumber Number that represents the grouping of transactions
 * @property string $ErrorText (Only used by backgroundjobs) To determine which transaction has an error
 * @property int $HourStatus Status of the transaction: 1 = Draft, 2 = Rejected, 10 = Submitted, 11 = Failed on approval, 14 = Processing, 16 = Processing, 19 = Failed while undoing approval, 20 = Final
 * @property string $ID Primary key
 * @property string $Item Item that is linked to the transaction, which provides the time or cost information
 * @property string $ItemDescription Description of the item that is linked to the transaction
 * @property bool $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property string $Modified The date and time transaction record was modified
 * @property string $Modifier The Guid ID of the user that modified the records
 * @property string $ModifierFullName The full name of the user that modified the record
 * @property string $Notes Notes linked to the transaction for providing additional information (not mandatory)
 * @property float $PriceFC For use in AmountFC (Quantiy * Price FC)
 * @property string $Project Guid ID of project that is linked to the transaction
 * @property string $ProjectAccount Project account ID that is linked to the transaction (not mandatory)
 * @property string $ProjectAccountCode Project account code that is linked to the transaction
 * @property string $ProjectAccountName Project account name that is linked to the transaction
 * @property string $ProjectCode Project code that is linked to the transaction
 * @property string $ProjectDescription Project description that is linked to the transaction
 * @property float $Quantity Quantity of the item that is linked to the transaction
 * @property string $StartTime Start time of the time transaction
 * @property string $Subscription Guid ID of subscription that is linked to the transaction
 * @property string $SubscriptionAccount Subscription account ID that is linked to the transaction, this is to identify the referenced subscription
 * @property string $SubscriptionAccountCode Subscription account code that is linked to the transaction
 * @property string $SubscriptionAccountName Subscription account name that is linked to the transaction
 * @property string $SubscriptionDescription Subscription description that is linked to the transaction
 * @property int $SubscriptionNumber Subscription number that is linked to the transaction
 * @property int $Type The type of transaction. E.g: 1 = Time, 2 = Cost
 * @property string $WBS Guid ID of activity for time transaction or expense for cost transaction that is linked to project WBS (work breakdown structure)
 * @property string $WBSDescription Name of activity for time transaction or expense for cost transaction that is linked to project WBS (work breakdown structure)
 */
class TimeCostTransaction extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'Account',
        'AccountName',
        'AmountFC',
        'Attachment',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Date',
        'Division',
        'DivisionDescription',
        'Employee',
        'EndTime',
        'EntryNumber',
        'ErrorText',
        'HourStatus',
        'ID',
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
        'ProjectCode',
        'ProjectDescription',
        'Quantity',
        'StartTime',
        'Subscription',
        'SubscriptionAccount',
        'SubscriptionAccountCode',
        'SubscriptionAccountName',
        'SubscriptionDescription',
        'SubscriptionNumber',
        'Type',
        'WBS',
        'WBSDescription',
    ];

    protected $url = 'sync/Project/TimeCostTransactions';
}
