<?php

namespace Picqer\Financials\Exact;

/**
 * Class ReasonForLogistic.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsReasonForLogistics
 *
 * @property string $ID Primary key.
 * @property int $Active Indicates if the reason code is active.
 * @property string $Code Code of the reason.
 * @property string $Created Creation date.
 * @property string $Creator User ID of creator.
 * @property string $CreatorFullName Name of creator.
 * @property string $Description Description of the reason code.
 * @property int $Division Division code.
 * @property string $Modified Last modified date.
 * @property string $Modifier User ID of modifier.
 * @property string $ModifierFullName Name of modifier.
 * @property string $Notes Extra notes.
 * @property Type[] $Types Collection of types
 */
class ReasonForLogistic extends Model
{
    use Query\Findable;

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
        'Types',
    ];

    protected $url = 'logistics/ReasonForLogistics';
}
