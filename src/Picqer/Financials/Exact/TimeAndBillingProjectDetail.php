<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingProjectDetail.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingProjectDetails
 *
 * @property string $ID Primary key
 * @property string $Account The account for this project
 * @property string $AccountName
 * @property string $Code Code of project
 * @property string $Description Description of the project
 * @property int $Type Reference to ProjectTypes
 */
class TimeAndBillingProjectDetail extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Code',
        'Description',
        'Type',
    ];

    protected $url = 'read/project/TimeAndBillingProjectDetails';
}
