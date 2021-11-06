<?php

namespace Picqer\Financials\Exact;

/**
 * Class RequestAttachment.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=WorkflowRequestAttachments
 *
 * @property string $ID Primary key
 * @property int $Division The division
 * @property string $DownloadUrl To get the file in its original format (xml, jpg, pdf, etc.) append &Download=1 to the url.
 * @property string $FileName Filename of the attachment
 * @property float $FileSize File size of the attachment
 * @property string $Request The request this attachment is linked to
 */
class RequestAttachment extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Division',
        'DownloadUrl',
        'FileName',
        'FileSize',
        'Request',
    ];

    protected $url = 'beta/{division}/workflow/RequestAttachments';
}
