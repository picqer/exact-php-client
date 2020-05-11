<?php

namespace Picqer\Financials\Exact;

/**
 * Class DocumentFolder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=DocumentsDocumentFolders
 *
 * @property string $ID Primary key
 * @property string $Code Document folder code
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Document folder description
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $ParentFolder Document folder parent folder ID
 */
class DocumentFolder extends Model
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
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ParentFolder',
    ];

    protected $url = 'documents/DocumentFolders';
}
