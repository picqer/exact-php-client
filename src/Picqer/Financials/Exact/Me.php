<?php

namespace Picqer\Financials\Exact;

/**
 * Class Me.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemMe
 *
 * @property string $UserID Primary key
 * @property int $AccountingDivision Accounting division number
 * @property int $CurrentDivision Division number that is currently used in the API. You should use a division number in the url
 * @property string $CustomerCode Account code of the logged in user.
 * @property string $DivisionCustomer Owner account of the division
 * @property string $DivisionCustomerCode Owner account code of the division
 * @property string $DivisionCustomerName Owner account name of the division
 * @property string $DivisionCustomerSiretNumber Owner account SIRET Number of the division for French legislation
 * @property string $DivisionCustomerVatNumber Owner account VAT Number of the division
 * @property int $DossierDivision Dossier division number (optional)
 * @property string $Email Email address of the user
 * @property string $EmployeeID Employee ID
 * @property string $FirstName First name
 * @property string $FullName Full name of the user
 * @property string $Gender Gender: M=Male, V=Female, O=Unknown
 * @property string $Initials Initials
 * @property bool $IsClientUser Client user of an accountant: either a portal user or a non-accountant user with his own license (internal use)
 * @property bool $IsEmployeeSelfServiceUser Employee user with limited access and specific start page
 * @property bool $IsMyFirmLiteUser MyFirm lite user of accountant with limited access and specific start page (internal use)
 * @property bool $IsMyFirmPortalUser MyFirm user of accountant with limited access and specific start page (internal use)
 * @property bool $IsStarterUser Starter user with limited access and specific start page (internal use)
 * @property string $Language Language spoken by this user
 * @property string $LanguageCode Language (culture) that is used in Exact Online
 * @property string $LastName Last name
 * @property int $Legislation Legislation
 * @property string $MiddleName Middle name
 * @property string $Mobile Mobile phone
 * @property string $Nationality Nationality
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone number extension
 * @property string $PictureUrl Url that can be used to retrieve the picture of the user
 * @property string $ServerTime The current date and time in Exact Online
 * @property float $ServerUtcOffset The time difference with UTC in seconds
 * @property string $ThumbnailPicture Binary thumbnail picture of this user (This property will never return value and will be removed in the near future.)
 * @property string $ThumbnailPictureFormat File type of the picture (This property will never return value and will be removed in the near future.)
 * @property string $Title Title
 * @property string $UserName Login name of the user
 */
class Me extends Model
{
    use Query\Findable;

    protected $primaryKey = 'UserID';

    protected $fillable = [
        'UserID',
        'AccountingDivision',
        'CurrentDivision',
        'CustomerCode',
        'DivisionCustomer',
        'DivisionCustomerCode',
        'DivisionCustomerName',
        'DivisionCustomerSiretNumber',
        'DivisionCustomerVatNumber',
        'DossierDivision',
        'Email',
        'EmployeeID',
        'FirstName',
        'FullName',
        'Gender',
        'Initials',
        'IsClientUser',
        'IsEmployeeSelfServiceUser',
        'IsMyFirmLiteUser',
        'IsMyFirmPortalUser',
        'IsStarterUser',
        'Language',
        'LanguageCode',
        'LastName',
        'Legislation',
        'MiddleName',
        'Mobile',
        'Nationality',
        'Phone',
        'PhoneExtension',
        'PictureUrl',
        'ServerTime',
        'ServerUtcOffset',
        'ThumbnailPicture',
        'ThumbnailPictureFormat',
        'Title',
        'UserName',
    ];

    protected $url = 'current/Me';

    public function find()
    {
        $result = $this->connection()->get($this->url);

        return new self($this->connection(), $result);
    }

    public function findWithSelect($select = '')
    {
        $result = $this->connection()->get($this->url, [
            '$select' => $select,
        ]);

        return new self($this->connection(), $result);
    }
}
