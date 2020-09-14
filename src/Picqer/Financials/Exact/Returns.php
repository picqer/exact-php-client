<?php

namespace Picqer\Financials\Exact;

/**
 * Class Return.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReturns
 *
 * @property string $DocumentID Primary key, document ID
 * @property float $Amount Amount in the currency of the transaction
 * @property string $Created Creation date
 * @property string $Currency Currency
 * @property string $Description Description
 * @property string $DocumentViewUrl Url to view the document
 * @property string $DueDate Due date
 * @property string $Frequency Frequency
 * @property string $PayrollDeclarationType Payroll declaration type
 * @property int $Period Period
 * @property string $PeriodDescription Description of Period
 * @property string $Request Reference to request
 * @property int $Status Status
 * @property int $Type Type
 * @property int $Year Year
 */
class Returns extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'DocumentID';

    protected $fillable = [
        'DocumentID',
        'Amount',
        'Created',
        'Currency',
        'Description',
        'DocumentViewUrl',
        'DueDate',
        'Frequency',
        'PayrollDeclarationType',
        'Period',
        'PeriodDescription',
        'Request',
        'Status',
        'Type',
        'Year',
    ];

    protected $url = 'read/financial/Returns';
}
