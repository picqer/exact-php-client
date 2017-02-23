<?php namespace Picqer\Financials\Exact;

/**
 * Class JobTitle
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMJobTitles
 * 
 * @property Guid $ID Primary key
 * @property String $Code Job title code
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Job title description
 * @property Int32 $Division Division code
 * @property String $JobCode Reference job code
 * @property Guid $JobGroup Group this job title belongs to
 * @property String $JobGroupCode Job group code
 * @property String $JobGroupDescription Job group description
 * @property Int32 $JobLevelFrom Job title represents job level from
 * @property Int32 $JobLevelTo Job title represents job level to
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Explanation or extra information can be stored in the notes
 */
class JobTitle extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'JobCode',
        'JobGroup',
        'JobGroupCode',
        'JobGroupDescription',
        'JobLevelFrom',
        'JobLevelTo',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes'
    ];

    protected $url = 'hrm/JobTitles';

}
