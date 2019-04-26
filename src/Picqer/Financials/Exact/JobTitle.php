<?php

namespace Picqer\Financials\Exact;

/**
 * Class JobTitle.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=HRMJobTitles
 *
 * @property string $ID Primary key
 * @property string $Code Job title code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Job title description
 * @property int $Division Division code
 * @property string $JobCode Reference job code
 * @property string $JobGroup Group this job title belongs to
 * @property string $JobGroupCode Job group code
 * @property string $JobGroupDescription Job group description
 * @property int $JobLevelFrom Job title represents job level from
 * @property int $JobLevelTo Job title represents job level to
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Explanation or extra information can be stored in the notes
 */
class JobTitle extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'Notes',
    ];

    protected $url = 'hrm/JobTitles';
}
