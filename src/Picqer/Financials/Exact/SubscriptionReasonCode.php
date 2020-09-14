<?php

namespace Picqer\Financials\Exact;

/**
 * Class SubscriptionReasonCode.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SubscriptionSubscriptionReasonCodes
 *
 * @property string $ID Primary key
 * @property bool $Active Indicates if the reason code is active
 * @property string $Code Subscription reason code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Remarks
 */
class SubscriptionReasonCode extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Active',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
    ];

    protected $url = 'subscription/SubscriptionReasonCodes';
}
