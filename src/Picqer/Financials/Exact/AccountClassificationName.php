<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountClassificationName.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAccountClassificationNames
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $SequenceNumber Sequence number
 */
class AccountClassificationName extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'SequenceNumber',
    ];

    protected $url = 'crm/AccountClassificationNames';
}
