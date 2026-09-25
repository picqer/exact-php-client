<?php

namespace Picqer\Financials\Exact;

/**
 * Class Fiscal.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesFiscals
 *
 * @property string $ID The Primary key
 * @property string $ActionDate The date indicating by when the action has to be taken
 * @property string $AssignedTo The user that the request is assigned to
 * @property string $AssignedToFullName The user name
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description The description
 * @property int $Division The division
 * @property string $FiscalStatus The status of the Fiscal request
 * @property string $FiscalStatusRemark The remark of the Fiscal request status
 * @property int $HID The human readable key
 * @property string $Message The message content of the Fiscal request
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $MyFirmUserEmail The email of MyFirm user
 * @property int $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property string $StatusDescription The description of the status
 * @property string $Type The message content of the Fiscal request
 * @property string $Url The URL back to Fiscal
 */
class Fiscal extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'ActionDate',
        'AssignedTo',
        'AssignedToFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'FiscalStatus',
        'FiscalStatusRemark',
        'HID',
        'Message',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'MyFirmUserEmail',
        'Status',
        'StatusDescription',
        'Type',
        'Url',
    ];

    protected $url = 'activities/Fiscals';
}
