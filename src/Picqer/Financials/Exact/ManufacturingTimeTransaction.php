<?php

namespace Picqer\Financials\Exact;

/**
 * Class ManufacturingTimeTransaction.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ManufacturingTimeTransactions
 *
 * @property string $ID Primary key
 * @property int $Activity Manufacturing time type: Setup = 10, Run = 20
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Date Date
 * @property int $Division Division code
 * @property string $Employee Employee linked to the transaction
 * @property float $Hours Machine hours
 * @property int $IsOperationFinished Is the operation finished?
 * @property float $LaborHours Labor Hours on the operation
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes linked to the time transaction
 * @property float $PercentComplete Percentage of the operation that is complete
 * @property float $Quantity Quantity
 * @property string $RoutingStepPlan Routing step linked to the transaction
 * @property string $ShopOrder Shop order linked to the transaction
 * @property int $Status Status of the transaction: Draft = 1, Rejected = 2, Submitted = 10, Final = 20
 * @property string $TimedTimeTransaction Timed time transaction linked to the transaction
 * @property string $WorkCenter Workcenter linked to the transaction
 */
class ManufacturingTimeTransaction extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Activity',
        'Created',
        'Creator',
        'CreatorFullName',
        'Date',
        'Division',
        'Employee',
        'Hours',
        'IsOperationFinished',
        'LaborHours',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PercentComplete',
        'Quantity',
        'RoutingStepPlan',
        'ShopOrder',
        'Status',
        'TimedTimeTransaction',
        'WorkCenter',
    ];

    protected $url = 'manufacturing/TimeTransactions';
}
