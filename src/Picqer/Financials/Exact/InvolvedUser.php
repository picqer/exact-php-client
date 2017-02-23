<?php namespace Picqer\Financials\Exact;

/**
 * Class InvolvedUser
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=AccountancyInvolvedUsers
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account ID of the account the user is involved with
 * @property String $AccountCity City of the account
 * @property String $AccountCode Code of the account
 * @property Boolean $AccountIsSupplier Supplier flag of the account
 * @property String $AccountLogoThumbnailUrl Logo thumbnail url of the account
 * @property String $AccountName Name of the account
 * @property String $AccountStatus Status of the account
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Int32 $Division Division code
 * @property Guid $InvolvedUserRole ID of the user role
 * @property String $InvolvedUserRoleDescription Description of the user role
 * @property Boolean $IsMainContact Main contact flag of the involved user
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $PersonEmail Email of a person
 * @property String $PersonPhone Phone of a person
 * @property String $PersonPhoneExtension Phone extension of a person
 * @property String $PersonPictureThumbnailUrl Picture thumbnail url of a person
 * @property Guid $User ID of the involved user
 * @property String $UserFullName User name of creator
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
        'UserFullName'
    ];

    protected $url = 'accountancy/InvolvedUsers';

}
