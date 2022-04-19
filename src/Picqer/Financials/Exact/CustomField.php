<?php

namespace Picqer\Financials\Exact;

/**
 * Class CustomField.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CustomFieldCustomFields
 *
 * @property string $LinkId Entity id
 * @property string $BusinessComponentName Business component name
 * @property string $PropertyName Custom business property name
 * @property string $Value Custom field data
 */
class CustomField extends Model
{
    use Query\Findable;

    protected $primaryKey = 'LinkId';

    protected $fillable = [
        'LinkId',
        'BusinessComponentName',
        'PropertyName',
        'Value',
    ];

    protected $url = 'customfield/CustomFields';
}
