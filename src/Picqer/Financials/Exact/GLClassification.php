<?php 

namespace Picqer\Financials\Exact;

/**
 * Class GLClassification
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLClassifications
 * 
 * @property Guid $ID Primary key
 * @property Boolean $Abstract Abstract elements are only used in presentation linkbases to group other elements. They are not supposed to be used in instance documents
 * @property String $Balance Only used for amount concepts: in that case either 'debit' or 'credit'
 * @property String $Code The Code is unique
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the element. Note that this description is only used for division-specific taxonomies (or reporting schemes). For general taxonomies, the descriptions are stored in the TaxonomyLabels table
 * @property Int32 $Division Division is optional. For taxonomies of Taxonomies.Type = 0 (general taxonomies), the Division is empty. For division specific taxonomies it is mandatory
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Name The Name is unique in the namespace
 * @property Boolean $Nillable Determines whether usage of the element is mandatory in an instance document
 * @property Guid $Parent Parent element for reporting schemes. In a reporting scheme, an element can have only one parent. This column is only used for reporting schemes. Note that in a real taxonomy, elements can have multiple parents.
 * @property String $PeriodType Only used for item concepts: either 'instant' or 'duration'. 'instant' is used for balance types of concepts, 'duration' is used for P&L types of concepts
 * @property String $SubstitutionGroup Mostly import sutstitutiongroup is xbrli:tuple, which makes the element a tuple concept. The default substitutiongroup for item concepts is xbrli:item
 * @property Guid $TaxonomyNamespace Namespace of the element
 * @property String $TaxonomyNamespaceDescription Description of TaxonomyNamespace
 * @property Guid $Type Type of the element
 */
class GLClassification extends Model
{
    use Query\Findable;

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
        'Type'
    ];

    protected $url = 'financial/GLClassifications';

}
