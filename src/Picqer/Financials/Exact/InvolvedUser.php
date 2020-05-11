<?php

namespace Picqer\Financials\Exact;

/**
 * Class InvolvedUser.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyInvolvedUsers
 *
 * @property string $ID Primary key
 * @property string $Account ID of the account the user is involved with
 * @property string $AccountCity City of the account
 * @property string $AccountCode Code of the account
 * @property bool $AccountIsSupplier Supplier flag of the account
 * @property string $AccountLogoThumbnailUrl Logo thumbnail url of the account
 * @property string $AccountName Name of the account
 * @property string $AccountStatus Status of the account
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property int $Division Division code
 * @property string $InvolvedUserRole ID of the user role
 * @property string $InvolvedUserRoleDescription Description of the user role
 * @property bool $IsMainContact Main contact flag of the involved user
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $PersonEmail Email of a person
 * @property string $PersonPhone Phone of a person
 * @property string $PersonPhoneExtension Phone extension of a person
 * @property string $PersonPictureThumbnailUrl Picture thumbnail url of a person
 * @property string $User ID of the involved user
 * @property string $UserFullName User name of creator
 */
class InvolvedUser extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCity',
        'AccountCode',
        'AccountIsSupplier',
        'AccountLogoThumbnailUrl',
        'AccountName',
        'AccountStatus',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'InvolvedUserRole',
        'InvolvedUserRoleDescription',
        'IsMainContact',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PersonEmail',
        'PersonPhone',
        'PersonPhoneExtension',
        'PersonPictureThumbnailUrl',
        'User',
        'UserFullName',
    ];

    protected $url = 'accountancy/InvolvedUsers';
}
