<?php

namespace Picqer\Financials\Exact;

/**
 * Class CustomField.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CustomFieldCustomFields
 *
 * @property string $LinkId Entity id
 * @property string $BusinessComponentName Business component name
 * @property string $Caption Custom field description
 * @property string $PropertyName Custom business property name
 * @property string $RefersTo The name of the referencing entity. The supported values are Item, Account, Project, Opportunity, SalesOrder and Contact
 * @property string $Type Represents the data type of the custom field. The supported datatypes are boolean, integer, string, double, date and GUID
 * @property string $Value Custom field data
 */
class CustomField extends Model
{
    use Query\Findable;

    protected $primaryKey = 'LinkId';

    protected $fillable = [
        'LinkId',
        'BusinessComponentName',
        'Caption',
        'PropertyName',
        'RefersTo',
        'Type',
        'Value',
    ];

    protected $url = 'customfield/CustomFields';
}
