<?php

namespace Picqer\Financials\Exact;

/**
 * Class TimeAndBillingProjectDetailsByID.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectTimeAndBillingProjectDetailsByID
 *
 * @property string $ID Primary key
 * @property string $Account The ID of the account that the project is linked to
 * @property string $AccountName The name of the account that the project is linked to
 * @property string $Code The code of the account that the project is linked to
 * @property string $Description The description of the account that project is linked to
 * @property int $Type The project type. E.g: 1 = Campaign, 2 = Fixed Price, 3 = Time and Material, 4 = Non Billable, 5 = Prepaid
 */
class TimeAndBillingProjectDetailsByID extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountName',
        'Code',
        'Description',
        'Type',
    ];

    protected $url = 'read/project/TimeAndBillingProjectDetailsByID';
}
