<?php

namespace Picqer\Financials\Exact;

/**
 * Class JournalStatusList.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadFinancialJournalStatusList
 *
 * @property string $Journal Reference to Journal
 * @property int $Period Financial period
 * @property int $Year Financial year
 * @property string $JournalDescription Description of Journal
 * @property int $JournalType Type of Journal 10=Cash, 12=Bank, 20=Sales, 21=Return invoice, 22=Purchase, 23=Received return invoice, 90=General journal
 * @property string $JournalTypeDescription Description of JournalType
 * @property int $Status Journal status for this year and period 0=open, 1=closed
 * @property string $StatusDescription Description of Status
 */
class JournalStatusList extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'Year';

    protected $fillable = [
        'Journal',
        'Period',
        'Year',
        'JournalDescription',
        'JournalType',
        'JournalTypeDescription',
        'Status',
        'StatusDescription',
    ];

    protected $url = 'read/financial/JournalStatusList';
}
