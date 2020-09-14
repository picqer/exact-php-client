<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLClassification.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLClassifications
 *
 * @property string $ID Primary key
 * @property bool $Abstract Abstract elements are only used in presentation linkbases to group other elements. They are not supposed to be used in instance documents
 * @property string $Balance Only used for amount concepts: in that case either 'debit' or 'credit'
 * @property string $Code The Code is unique
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the element. Note that this description is only used for division-specific taxonomies (or reporting schemes).
 * @property int $Division Division is optional. For taxonomies of Taxonomies.Type = 0 (general taxonomies), the Division is empty. For division specific taxonomies it is mandatory
 * @property bool $IsTupleSubElement Obsolete
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Name The Name is unique in the namespace
 * @property bool $Nillable Determines whether usage of the element is mandatory in an instance document
 * @property string $Parent Parent element for reporting schemes. In a reporting scheme, an element can have only one parent. This column is only used for reporting schemes. Note that in a real taxonomy, elements can have multiple parents.
 * @property string $PeriodType Only used for item concepts: either 'instant' or 'duration'. 'instant' is used for balance types of concepts, 'duration' is used for P&L types of concepts
 * @property string $SubstitutionGroup Mostly import sutstitutiongroup is xbrli:tuple, which makes the element a tuple concept. The default substitutiongroup for item concepts is xbrli:item
 * @property string $TaxonomyNamespace Namespace of the element
 * @property string $TaxonomyNamespaceDescription Description of TaxonomyNamespace
 * @property string $Type Type of the element
 */
class GLClassification extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Abstract',
        'Balance',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'IsTupleSubElement',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Name',
        'Nillable',
        'Parent',
        'PeriodType',
        'SubstitutionGroup',
        'TaxonomyNamespace',
        'TaxonomyNamespaceDescription',
        'Type',
    ];

    protected $url = 'financial/GLClassifications';
}
