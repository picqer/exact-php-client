<?php namespace Picqer\Financials\Exact;

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