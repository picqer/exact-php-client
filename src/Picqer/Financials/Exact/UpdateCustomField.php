<?php

namespace Picqer\Financials\Exact;

/**
 * Class UpdateCustomField.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CustomFieldUpdateCustomField
 *
 * @property string $LinkId Entity id
 * @property string $BusinessComponentName Business component name
 * @property string $PropertyName Custom business property name
 * @property string $Value Custom field data
 */
class UpdateCustomField extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'LinkId';

    protected $fillable = [
        'LinkId',
        'BusinessComponentName',
        'PropertyName',
        'Value',
    ];

    protected $url = 'customfield/UpdateCustomField';
}
