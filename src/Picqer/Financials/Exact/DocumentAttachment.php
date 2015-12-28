<?php namespace Picqer\Financials\Exact;

class DocumentAttachment extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Attachment',
        'Document',
        'FileName',   
    ];

    protected $url = 'documents/DocumentAttachments';

}
