<?php namespace Picqer\Financials\Exact;

/**
 * Class Me
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SystemSystemMe
 *
 * @property Guid   $UserID Primary key
 * @property Int32  $CurrentDivision Division number that is currently used in the API. You should use a division number in the url
 * @property Guid   $DivisionCustomer Owner account of the division
 * @property String $DivisionCustomerCode Owner account code of the division
 * @property String $DivisionCustomerName Owner account name of the division
 * @property String $Email Email address of the user
 * @property Guid   $EmployeeID Employee ID
 * @property String $FirstName First name
 * @property String $FullName Full name of the user
 * @property String $Gender Gender: M=Male, V=Female, O=Unknown
 * @property String $Initials Initials
 * @property String $Language Language spoken by this user
 * @property String $LanguageCode Language (culture) that is used in Exact Online
 * @property String $LastName Last name
 * @property Int64  $Legislation Legislation
 * @property String $MiddleName Middle name
 * @property String $Mobile Mobile phone
 * @property String $Nationality Nationality
 * @property String $Phone Phone number
 * @property String $PhoneExtension Phone number extension
 * @property String $PictureUrl Url that can be used to retrieve the picture of the user
 * @property String $ServerTime The current date and time in Exact Online
 * @property Double $ServerUtcOffset The time difference with UTC in seconds
 * @property Binary $ThumbnailPicture Binary thumbnail picture of this user
 * @property String $ThumbnailPictureFormat File type of the picture
 * @property String $Title Title
 * @property String $UserName Login name of the user
 */
class Me extends Model
{

    /**
     * @var string Name of the primary key for this model
     */
    protected $primaryKey = 'UserID';

    protected $fillable = [
        'UserID',
        'CurrentDivision',
        'DivisionCustomer',
        'DivisionCustomerCode',
        'DivisionCustomerName',
        'Email',
        'EmployeeID',
        'FirstName',
        'FullName',
        'Gender',
        'Initials',
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
        'UserName'
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
            '$select' => $select
        ]);

        return new self($this->connection(), $result);
    }
}