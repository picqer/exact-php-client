<?php 

namespace Picqer\Financials\Exact;

/**
 * Class BudgetScenario
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=BudgetBudgetScenarios
 * 
 * @property Guid $ID Primary key
 * @property String $Code Budget scenario code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Budget scenario description
 * @property Int32 $Division Division code
 * @property Int16 $FromYear From year
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property Int16 $ToYear To year
 */
class BudgetScenario extends Model
{
    use Query\Findable;

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
        'ToYear'
    ];

    protected $url = 'ion}/budget/BudgetScenarios';

}
