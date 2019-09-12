<?php

namespace Picqer\Financials\Exact;

/**
 * Class AbsenceRegistrationTransaction
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMAbsenceRegistrationTransactions
 *
 * @property string $ID Primary key
 * @property string $AbsenceRegistration Reference key to Absence Registration
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $EndTime End time on the last day of absence stored as DateTime, and the date should be ignored
 * @property string $ExpectedEndDate Expected end date of absence
 * @property float $Hours Total number of absence hours
 * @property float $HoursFirstDay Hours of absence on the first day
 * @property float $HoursLastDay Hours of absence on the last day
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Extra information for absence
 * @property string $NotificationMoment Notification moment of absence
 * @property float $PercentageDisablement Percentage disablement
 * @property string $StartDate Start date of absence
 * @property string $StartTime Start time on the first day of absence stored as DateTime, and the date should be ignored
 * @property int $Status Status of absence, 0 = Open, 1 = Recovered
 */
class AbsenceRegistrationTransaction extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AbsenceRegistration',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'EndTime',
        'ExpectedEndDate',
        'Hours',
        'HoursFirstDay',
        'HoursLastDay',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'NotificationMoment',
        'PercentageDisablement',
        'StartDate',
        'StartTime',
        'Status',
    ];

    protected $url = 'hrm/AbsenceRegistrationTransactions';
}
