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
 * @property bool $IsRootConV2 IsRootConV2
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $ParentFolder Document folder parent folder ID
 * @property int $Share Share status of this folder
 * @property int $SharePointConnectionStatus SharePointConnectionStatus of this folder
 * @property string $SharePointID SharePointID of this folder
 */
class AccountDocumentFolder extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Code',
        'CountOfDocuments',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'IsRootConV2',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'ParentFolder',
        'Share',
        'SharePointConnectionStatus',
        'SharePointID',
    ];

    protected $url = 'read/crm/AccountDocumentFolders';
}
