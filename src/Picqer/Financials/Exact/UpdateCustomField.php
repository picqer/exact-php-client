<?php

namespace Picqer\Financials\Exact;

/**
 * Class UpdateCustomField.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CustomFieldUpdateCustomField
 *
 * @property string $PropertyName Custom business property name
 * @property string $BusinessComponentName Business component name
 * @property string $Caption Custom field description
 * @property string $LinkId Entity id
 * @property string $RefersTo The name of the referencing entity. The supported values are Item, Account, Project, Opportunity, SalesOrder, Contact, User, Employee, Document, Team, CostUnit, CostCenter and Journal
 * @property string $Type Represents the data type of the custom field. The supported datatypes are boolean, integer, string, double, date and GUID
 * @property string $Value Custom field data
 */
class UpdateCustomField extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'PropertyName';

    protected $fillable = [
        'PropertyName',
        'BusinessComponentName',
        'Caption',
        'LinkId',
        'RefersTo',
        'Type',
        'Value',
    ];

    protected $url = 'customfield/UpdateCustomField';
}
