<?php

namespace Picqer\Financials\Exact;

/**
 * Class InvolvedUserRole.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyInvolvedUserRoles
 *
 * @property string $ID Primary key
 * @property string $Code Code of the involved user role
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of role
 * @property int $DescriptionTermID Description term code of role
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 */
class InvolvedUserRole extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'DescriptionTermID',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'accountancy/InvolvedUserRoles';
}
