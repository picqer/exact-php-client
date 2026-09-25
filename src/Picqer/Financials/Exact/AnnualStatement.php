<?php

namespace Picqer\Financials\Exact;

/**
 * Class AnnualStatement.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ActivitiesAnnualStatements
 *
 * @property string $ID The Primary key
 * @property string $ActionDate The date indicating by when the action has to be taken
 * @property string $AnnualStatementStatus The status of the Annual Statement request
 * @property string $AnnualStatementStatusRemark The remark of the Annual Statement request status
 * @property string $AssignedTo The user that the request is assigned to
 * @property string $AssignedToFullName The user name
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Description The description
 * @property int $Division The division
 * @property int $HID The human readable key
 * @property string $Message The message content of the Annual Statement request
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $MyFirmUserEmail The email of MyFirm user
 * @property int $Status Status: 0 = Void, 5 = Rejected, 10 = Draft, 20 = Open, 30 = Approved, 40 = Realized, 50 = Processed
 * @property string $StatusDescription The description of the status
 * @property string $Type The message content of the Annual Statement request
 * @property string $Url The URL back to Annual Statement
 */
class AnnualStatement extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'ActionDate',
        'AnnualStatementStatus',
        'AnnualStatementStatusRemark',
        'AssignedTo',
        'AssignedToFullName',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
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

    protected $url = 'activities/AnnualStatements';
}
