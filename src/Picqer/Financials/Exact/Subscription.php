<?php namespace Picqer\Financials\Exact;

/**
 * Class Subscription
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptions
 * 
 * @property Guid $EntryID 
 * @property Boolean $BlockEntry 
 * @property DateTime $CancellationDate 
 * @property Guid $Classification 
 * @property String $ClassificationCode 
 * @property String $ClassificationDescription 
 * @property DateTime $Created 
 * @property Guid $Creator 
 * @property String $CreatorFullName 
 * @property String $Currency 
 * @property String $CustomerPONumber 
 * @property String $Description 
 * @property Int32 $Division 
 * @property DateTime $EndDate 
 * @property Byte $InvoiceDay 
 * @property DateTime $InvoicedTo 
 * @property Guid $InvoiceTo 
 * @property Guid $InvoiceToContactPerson 
 * @property String $InvoiceToContactPersonFullName 
 * @property String $InvoiceToName 
 * @property DateTime $InvoicingStartDate 
 * @property DateTime $Modified 
 * @property Guid $Modifier 
 * @property String $ModifierFullName 
 * @property String $Notes 
 * @property Int32 $Number 
 * @property Guid $OrderedBy 
 * @property Guid $OrderedByContactPerson 
 * @property String $OrderedByContactPersonFullName 
 * @property String $OrderedByName 
 * @property String $PaymentCondition 
 * @property String $PaymentConditionDescription 
 * @property Boolean $Printed 
 * @property Guid $ReasonCancelled 
 * @property String $ReasonCancelledCode 
 * @property String $ReasonCancelledDescription 
 * @property DateTime $StartDate 
 * @property SubscriptionLines $SubscriptionLines 
 * @property SubscriptionRestrictionEmployees $SubscriptionRestrictionEmployees 
 * @property SubscriptionRestrictionItems $SubscriptionRestrictionItems 
 * @property Guid $SubscriptionType 
 * @property String $SubscriptionTypeCode 
 * @property String $SubscriptionTypeDescription 
 */
class Subscription extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'EntryID';

    protected $fillable = [
        'EntryID',
        'BlockEntry',
        'CancellationDate',
        'Classification',
        'ClassificationCode',
        'ClassificationDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'CustomerPONumber',
        'Description',
        'Division',
        'EndDate',
        'InvoiceDay',
        'InvoicedTo',
        'InvoiceTo',
        'InvoiceToContactPerson',
        'InvoiceToContactPersonFullName',
        'InvoiceToName',
        'InvoicingStartDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Number',
        'OrderedBy',
        'OrderedByContactPerson',
        'OrderedByContactPersonFullName',
        'OrderedByName',
        'PaymentCondition',
        'PaymentConditionDescription',
        'Printed',
        'ReasonCancelled',
        'ReasonCancelledCode',
        'ReasonCancelledDescription',
        'StartDate',
        'SubscriptionLines',
        'SubscriptionRestrictionEmployees',
        'SubscriptionRestrictionItems',
        'SubscriptionType',
        'SubscriptionTypeCode',
        'SubscriptionTypeDescription'
    ];

    protected $url = 'subscription/Subscriptions';

}
