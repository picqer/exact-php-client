<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountClass.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAccountClasses
 *
 * @property string $ID Primary key
 * @property string $Code Classification code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CreditManagementScenario Default credit management scenario to be used for new payment terms
 * @property string $Description Description
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 */
class AccountClass extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'CreditManagementScenario',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'crm/AccountClasses';
}
