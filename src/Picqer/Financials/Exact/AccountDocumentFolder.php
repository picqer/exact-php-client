<?php

namespace Picqer\Financials\Exact;

/**
 * Class AccountDocumentFolder.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMAccountDocumentFolders
 *
 * @property string $ID Primary key
 * @property string $Code Document folder code
 * @property int $CountOfDocuments Count of documents for current account in current folder
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
class AccountDocumentFolder extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code',
        'CountOfDocuments',
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

    protected $url = 'read/crm/AccountDocumentFolders?accountId={Edm.Guid}';
}
