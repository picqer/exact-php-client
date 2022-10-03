<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionReasonCode.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionReasonCodes
 *
 * @property string $ID The GUID id of the record
 * @property bool $Active Boolean values to indicate if the reason code is still active
 * @property string $Code Code of the reason of cancellation of the subscription
 * @property string $Created Date and time of the creation of the reason of cancellation of the subscription record
 * @property string $Creator GUID id of the user that created the reason of cancellation of the subscription
 * @property string $CreatorFullName Full name of the user that created the reason of cancellation of the subscription
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Description The description written for the cancellation of the subscription
 * @property int $Division The division that the record was created in
 * @property string $Modified The date and time the record was modified
 * @property string $Modifier Guid id of the user that modified the reason of cancellation of the subscription record
 * @property string $ModifierFullName Full name of the user that modified the reason of cancellation of the subscription record
 * @property string $Notes Remarks written link to the reason of cancellation of the subscription
 */
class SubscriptionReasonCode extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Active',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomField',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
    ];

    protected $url = 'subscription/SubscriptionReasonCodes';
}
