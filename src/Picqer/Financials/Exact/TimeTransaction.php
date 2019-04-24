<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeTransaction.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectTimeTransactions
 *
 * @property string $ID Primary key
 * @property string $Account Account linked to the transaction
 * @property string $AccountName Name of Account
 * @property string $Activity Reference to ProjectWBS (work breakdown structure)
 * @property string $ActivityDescription Description of ProjectWBS
 * @property float $Amount This property is obsolete. Use property 'AmountFC' instead.
 * @property float $AmountFC Amount in the currency of the transaction of the transaction
 * @property string $Attachment Attachment linked to the transaction
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Currency Currency of the amount
 * @property string $Date Date
 * @property int $Division Division code
 * @property string $DivisionDescription Description of Division
 * @property string $Employee Employee linked to the transaction
 * @property string $EndTime End time of the transaction
 * @property int $EntryNumber Entrynumber
 * @property string $ErrorText Errortext, used for the backgroundjobs
 * @property int $HourStatus Status of the transaction
 * @property string $Item Item linked to the transaction. Items of type 'time' are linked to time transactions. Items of other types are linked to cost transactions
 * @property string $ItemDescription Description of Item
 * @property bool $ItemDivisable True if you can use decimals for item quantity
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes linked to the transaction
 * @property float $Price This property is obsolete. Use property 'PriceFC' instead.
 * @property float $PriceFC PriceFC (AmountFC = Quantity * PriceFC)
 * @property string $Project Project linked to the transaction
 * @property string $ProjectAccount Reference to project account
 * @property string $ProjectAccountCode Project account code
 * @property string $ProjectAccountName Project account name
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property float $Quantity Quantity of the transaction
 * @property bool $SkipValidation Skip validation
 * @property string $StartTime Start time of the transaction
 * @property string $Subscription Subscription linked to the transaction
 * @property string $SubscriptionAccount Account linked to the subscription
 * @property string $SubscriptionAccountCode Subscription account code
 * @property string $SubscriptionAccountName Subscription account name
 * @property string $SubscriptionDescription Description of the subscription
 * @property int $SubscriptionNumber Subscription number
 * @property int $Type Type of the transaction
 */
class TimeTransaction extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Activity',
        'ActivityDescription',
        'Amount',
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
        'Item',
        'ItemDescription',
        'ItemDivisable',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Price',
        'PriceFC',
        'Project',
        'ProjectAccount',
        'ProjectAccountCode',
        'ProjectAccountName',
        'ProjectCode',
        'ProjectDescription',
        'Quantity',
        'SkipValidation',
        'StartTime',
        'Subscription',
        'SubscriptionAccount',
        'SubscriptionAccountCode',
        'SubscriptionAccountName',
        'SubscriptionDescription',
        'SubscriptionNumber',
        'Type',
    ];

    protected $url = 'project/TimeTransactions';
}
