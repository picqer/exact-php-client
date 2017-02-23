<?php 

namespace Picqer\Financials\Exact;

/**
 * Class JournalStatusList
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialJournalStatusList
 * 
 * @property String $Journal Reference to Journal
 * @property Int32 $Period Financial period
 * @property Int32 $Year Financial year
 * @property String $JournalDescription Description of Journal
 * @property Int32 $JournalType Type of Journal 10=Cash, 12=Bank, 20=Sales, 21=Return invoice, 22=Purchase, 23=Received return invoice, 90=General journal
 * @property String $JournalTypeDescription Description of JournalType
 * @property Int32 $Status Journal status for this year and period 0=open, 1=closed
 * @property String $StatusDescription Description of Status
 */
class JournalStatusList extends Model
{
    use Query\Findable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'Year';

    protected $fillable = [
        'Journal',
        'Period',
        'Year',
        'JournalDescription',
        'JournalType',
        'JournalTypeDescription',
        'Status',
        'StatusDescription'
    ];

    protected $url = 'read/financial/JournalStatusList';

}
