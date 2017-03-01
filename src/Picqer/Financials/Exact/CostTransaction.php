<?php 

namespace Picqer\Financials\Exact;

/**
 * Class CostTransaction
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectCostTransactions
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Account linked to the transaction
 * @property String $AccountName Name of Account
 * @property Double $Amount Amount in the currency of the transaction
 * @property Double $AmountFC Amount of the transaction in the currency of the transaction
 * @property Guid $Attachment Attachment linked to the transaction (not mandatory)
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Currency Currency of the amount
 * @property DateTime $Date Date
 * @property Int32 $Division Division code
 * @property String $DivisionDescription Description of Division
 * @property Guid $Employee Employee linked to the transaction
 * @property Int32 $EntryNumber Entrynumber
 * @property String $ErrorText Errortext, used for the backgroundjobs
 * @property Guid $Expense Reference to ProjectWBS (work breakdown structure)
 * @property String $ExpenseDescription Description of ProjectWBS
 * @property Int16 $HourStatus Status of the transaction
 * @property Guid $Item Item linked to the transaction. Items of type 'time' are linked to time transactionsItems of other types are linked to costtransactions
 * @property String $ItemDescription Description of Item
 * @property Boolean $ItemDivisable Indicates if fractional quantities of the item can be used, for example quantity = 0.4
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes linked to the transaction (not mandatory)
 * @property Double $Price Price in the currency of the transaction
 * @property Double $PriceFC PriceFC (AmountFC = Quantity * PriceFC)
 * @property Guid $Project Project linked to the transaction
 * @property Guid $ProjectAccount Project account linked to the transaction (not mandatory)
 * @property String $ProjectAccountCode Project account code
 * @property String $ProjectAccountName Project account name
 * @property String $ProjectDescription Description of Project
 * @property Double $Quantity Quantity of the transaction
 * @property Guid $Subscription Subscription linked to the transaction
 * @property Guid $SubscriptionAccount Account linked to the subscription
 * @property String $SubscriptionAccountCode Subscription account code
 * @property String $SubscriptionAccountName Subscription account name
 * @property String $SubscriptionDescription Description of the subscription
 * @property Int32 $SubscriptionNumber Subscription number
 * @property Int16 $Type Type of the transaction
 */
class CostTransaction extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
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
        'Price',
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
        'Type'
    ];

    protected $url = 'project/CostTransactions';

}
