<?php namespace Picqer\Financials\Exact;

/**
 * Class Me
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=
 *
 * @property  $CurrentDivision 
 * @property  $FullName 
 * @property  $PictureUrl 
 * @property  $UserID 
 * @property  $UserName 
 * @property  $LanguageCode 
 * @property  $Email 
 * @property  $Title 
 * @property  $Initials 
 * @property  $FirstName 
 * @property  $MiddleName 
 * @property  $LastName 
 * @property  $Gender 
 * @property  $Language 
 * @property  $Phone 
 * @property  $PhoneExtension 
 * @property  $Mobile 
 */
class Me extends Model
{

    protected $fillable = [
        'CurrentDivision',
        'FullName',
        'PictureUrl',
        'UserID',
        'UserName',
        'LanguageCode',
        'Email',
        'Title',
        'Initials',
        'FirstName',
        'MiddleName',
        'LastName',
        'Gender',
        'Language',
        'Phone',
        'PhoneExtension',
        'Mobile'
    ];


    public function find()
    {
        $result = $this->connection()->get('current/Me');

        return new self($this->connection(), $result);
    }
}