<?php

namespace Picqer\Financials\Exact;

/**
 * Class Layout.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceLayouts
 *
 * @property string $ID Primary key
 * @property string $Created Creation date
 * @property string $Creator User ID of the creator
 * @property string $CreatorFullName Name of the creator
 * @property int $Division Division code
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of the last modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Subject Layout name
 * @property int $Type Type: 1=Layout, 2=E-mail text layout, 3=Word template
 */
class Layout extends Model
{
    use Query\Findable;
    use Persistance\Storable;

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
        'Type',
    ];

    protected $url = 'salesinvoice/Layouts';
}
