<?php

namespace Picqer\Financials\Exact;

/**
 * Class BankStatementUpload.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CashflowBankStatementUploads
 *
 * @property string $ID The primary key of the bank statement upload.
 * @property BankStatementUploadAttachment[] $Attachments Collection of attachments associated with the bank statement upload.
 * @property string $Bank Bank for which the bank statement is uploaded.
 * @property string $BankAccount Bank account for which the bank statement is uploaded.
 * @property string $BankStatementDocument Reference to document with bank statement upload
 * @property string $Country The country associated with the bank statement upload.
 * @property string $Created The date and time on which the bank statement was created.
 * @property string $Creator The user ID of the uploader of the bank statement.
 * @property string $Currency The currency associated with the bank statement upload.
 * @property string $Description The description associated with the bank statement upload.
 * @property int $Division The division associated with the bank statement upload.
 * @property string $Modified The date and time the uploaded bank statement was last modified.
 * @property string $Modifier The ID of the user that last modified the uploaded bank statement.
 * @property int $UploadStatus The status of bank statement upload.0 - Unknown, 5 - Rejected, 20 - Open, 25 - Prepared, 42 - In Process, 50 - Processed
 * @property int $UploadType The type of bank statement upload.1000 - CODA
 */
class BankStatementUpload extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Attachments',
        'Bank',
        'BankAccount',
        'BankStatementDocument',
        'Country',
        'Created',
        'Creator',
        'Currency',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'UploadStatus',
        'UploadType',
    ];

    protected $url = 'cashflow/BankStatementUploads';
}
