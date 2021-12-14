<?php

namespace Picqer\Financials\Exact;

/**
 * Class PayrollComponent.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=PayrollPayrollComponents
 *
 * @property string $ID ID
 * @property int $Calculate Calculate
 * @property string $Category Category
 * @property string $CategoryDescription Category description
 * @property string $Code Code
 * @property string $Created Created
 * @property string $Creator Creator
 * @property string $CreatorFullName Creator full name
 * @property string $Description Description
 * @property int $Division Division
 * @property string $EmploymentConditionGroupCode Employment condition group code
 * @property string $EmploymentConditionGroupDescription Employment condition group description
 * @property string $EndDate End date
 * @property string $GLClassification GL classification
 * @property string $GLClassificationDescription GL classification description
 * @property string $Modified Modified
 * @property string $Modifier Modifier
 * @property string $ModifierFullName Modifier full name
 * @property string $PensionDeclarationClassification Pension declaration classification
 * @property string $PensionDeclarationClassificationDescription Pension declaration classification description
 * @property string $PensionDeclarationSubclassification Pension declaration subclassification
 * @property string $PensionDeclarationSubclassificationDescription Pension declaration subclassification description
 * @property string $SearchCode Search code
 * @property string $StartDate Start date
 * @property string $Subcategory Subcategory
 * @property string $SubcategoryDescription Subcategory description
 * @property string $TaxDeclarationClassification Tax declaration classification
 * @property string $TaxDeclarationClassificationDescription Tax declaration classification description
 * @property int $TransactionType Transaction type: 1 - Normal, 2- Special, 3 - Normal and special
 * @property int $Type Type: 1 - Allowance, 2- Deduction, 3 - Subtotal
 * @property string $WageListClassification Wage list classification
 * @property string $WageListClassificationDescription Wage list classification description
 */
class PayrollComponent extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Calculate',
        'Category',
        'CategoryDescription',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EmploymentConditionGroupCode',
        'EmploymentConditionGroupDescription',
        'EndDate',
        'GLClassification',
        'GLClassificationDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PensionDeclarationClassification',
        'PensionDeclarationClassificationDescription',
        'PensionDeclarationSubclassification',
        'PensionDeclarationSubclassificationDescription',
        'SearchCode',
        'StartDate',
        'Subcategory',
        'SubcategoryDescription',
        'TaxDeclarationClassification',
        'TaxDeclarationClassificationDescription',
        'TransactionType',
        'Type',
        'WageListClassification',
        'WageListClassificationDescription',
    ];

    protected $url = 'beta/{division}/payroll/PayrollComponents';
}
