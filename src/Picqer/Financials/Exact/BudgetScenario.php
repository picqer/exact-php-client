<?php

namespace Picqer\Financials\Exact;

/**
 * Class BudgetScenario.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=BudgetBudgetScenarios
 *
 * @property string $ID Primary key
 * @property string $Code Budget scenario code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Budget scenario description
 * @property int $Division Division code
 * @property int $FromYear From year
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $ToYear To year
 */
class BudgetScenario extends Model
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
        'Division',
        'FromYear',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ToYear',
    ];

    protected $url = 'beta/{division}/budget/BudgetScenarios';
}
