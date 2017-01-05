<?php namespace Picqer\Financials\Exact;

/**
 * Class Layout
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceLayouts
 * 
 * @property Guid $ID Primary key
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of the creator
 * @property String $CreatorFullName Name of the creator
 * @property Int32 $Division Division code
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of the last modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Subject Layout name
 * @property Int16 $Type Type: 1=Layout, 2=E-mail text layout, 3=Word template
 */
class Layout extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Created',
        'Creator',
        'CreatorFullName',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Subject',
        'Type'
    ];

    protected $url = 'salesinvoice/Layouts';

}
