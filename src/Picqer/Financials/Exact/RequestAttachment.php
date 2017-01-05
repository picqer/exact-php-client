<?php namespace Picqer\Financials\Exact;

/**
 * Class RequestAttachment
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=WorkflowRequestAttachments
 * 
 * @property Guid $ID Primary key
 * @property Int32 $Division The division
 * @property String $DownloadUrl The binary is accessed through this url
 * @property String $FileName Filename of the attachment
 * @property Double $FileSize File size of the attachment
 * @property Guid $Request The request this attachment is linked to
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
        'Request'
    ];

    protected $url = 'ion}/workflow/RequestAttachments';

}
