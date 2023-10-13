<?php

namespace Picqer\Financials\Exact;

/**
 * Class ProjectProgressReport.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectProjectProgressReports
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Description The description of the progress report
 * @property int $Division The code of the company that the record is stored in
 * @property float $EstimatedPercentageCompleted Estimate project completed in percentage
 * @property string $EstimatedProjectEndDate Estimated project completion date
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Project Project ID that is linked to the progress report
 * @property string $ProjectCode Project code that is linked to the progress report
 * @property string $ProjectDescription Project description that is linked to the progress report
 * @property string $ReferenceDate Reference date
 * @property string $Report Rich text of this progress report
 */
class ProjectProgressReport extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomField',
        'Description',
        'Division',
        'EstimatedPercentageCompleted',
        'EstimatedProjectEndDate',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'ReferenceDate',
        'Report',
    ];

    protected $url = 'project/ProjectProgressReports';
}
