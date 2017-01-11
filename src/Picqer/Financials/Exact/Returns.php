<?php namespace Picqer\Financials\Exact;

/**
 * Class Returns
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialReturns
 * 
 * @property Guid $DocumentID Primary key, document ID
 * @property Double $Amount Amount in the currency of the transaction
 * @property DateTime $Created Creation date
 * @property String $Currency Currency
 * @property String $Description Description
 * @property String $DocumentViewUrl Url to view the document
 * @property DateTime $DueDate Due date
 * @property String $Frequency Frequency
 * @property String $PayrollDeclarationType Payroll declaration type
 * @property Int32 $Period Period
 * @property String $PeriodDescription Description of Period
 * @property Guid $Request Reference to request
 * @property Int32 $Status Status
 * @property Int32 $Type Type
 * @property Int32 $Year Year
 */
class Returns extends Model
{
    use Query\Findable;

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
        'Year'
    ];

    protected $url = 'read/financial/Returns';

}
