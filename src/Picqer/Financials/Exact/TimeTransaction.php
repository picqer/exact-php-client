<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeTransaction
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectTimeTransactions
 *
 * @property Guid $ID Primary key
 * @property Guid $Account Account linked to the transaction
 * @property String $AccountName Name of Account
 * @property Guid $Activity Reference to ProjectWBS (work breakdown structure)
 * @property String $ActivityDescription Description of ProjectWBS
 * @property Double $Amount Amount in the currency of the transaction
 * @property Double $AmountFC Amount in the currency of the transaction of the transaction
 * @property Guid $Attachment Attachment linked to the transaction
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency of the amount
 * @property DateTime $Date Date
 * @property Int32 $Division Division code
 * @property String $DivisionDescription Description of Division
 * @property Guid $Employee Employee linked to the transaction
 * @property DateTime $EndTime End time of the transaction
 * @property Int32 $EntryNumber Entrynumber
 * @property String $ErrorText Errortext, used for the backgroundjobs
 * @property Int16 $HourStatus Status of the transaction
 * @property Guid $Item Item linked to the transaction. Items of type 'time' are linked to time transactions. Items of other types are linked to cost transactions
 * @property String $ItemDescription Description of Item
 * @property Boolean $ItemDivisable True if you can use decimals for item quantity
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes linked to the transaction
 * @property Double $Price Price in the currency of the transaction
 * @property Double $PriceFC PriceFC (AmountFC = Quantity * PriceFC)
 * @property Guid $Project Project linked to the transaction
 * @property Guid $ProjectAccount Reference to project account
 * @property String $ProjectAccountCode Project account code
 * @property String $ProjectAccountName Project account name
 * @property String $ProjectCode Code of Project
 * @property String $ProjectDescription Description of Project
 * @property Double $Quantity Quantity of the transaction
 * @property DateTime $StartTime Start time of the transaction
 * @property Guid $Subscription Subscription linked to the transaction
 * @property Guid $SubscriptionAccount Account linked to the subscription
 * @property String $SubscriptionAccountCode Subscription account code
 * @property String $SubscriptionAccountName Subscription account name
 * @property String $SubscriptionDescription Description of the subscription
 * @property Int32 $SubscriptionNumber Subscription number
 * @property Int16 $Type Type of the transaction
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
