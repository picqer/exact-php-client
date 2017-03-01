<?php 

namespace Picqer\Financials\Exact;

/**
 * Class ReasonCode
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMReasonCodes
 * 
 * @property Guid $ID Primary key.
 * @property Byte $Active Indicates if the reason code is active.
 * @property String $Code Code of the reason.
 * @property DateTime $Created Creation date.
 * @property Guid $Creator User ID of creator.
 * @property String $CreatorFullName Name of creator.
 * @property String $Description Description of the reason code.
 * @property Int32 $Division Division code.
 * @property DateTime $Modified Last modified date.
 * @property Guid $Modifier User ID of modifier.
 * @property String $ModifierFullName Name of modifier.
 * @property String $Notes Extra notes.
 * @property Int16 $Type Type of the reason code.
 * @property String $TypeDescription Description of the type of the reason code.
 */
class ReasonCode extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Active',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'Type',
        'TypeDescription'
    ];

    protected $url = 'crm/ReasonCodes';

}
