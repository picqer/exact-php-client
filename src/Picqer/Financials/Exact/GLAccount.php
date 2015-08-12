<?php namespace Picqer\Financials\Exact;

class GLAccount extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AssimildatedVATBox',
        'BalanceSide',
        'BalanceType',
        'BelcotaxType',
        'Code',
        'Compress',
        'Costcenter',
        'CostcenterDescription',
        'Costunit',
        'CostunitDescription',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'ExcludeVATListing',
        'ExpenseNonDeductiblePercentage',
        'IsBlocked',
        'Matching',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'PrivateGLAccount',
        'PrivatePercentage',
        'ReportingCode',
        'RevalueCurrency',
        'SearchCode',
        'Type',
        'TypeDescription',
        'UseCostcenter',
        'UseCostunit',
        'VATCode',
        'VATDescription',
        'VATGLAccountType',
        'VATNonDeductibleGLAccount',
        'VATNonDeductiblePercentage',
        'VATSystem',
        'YearEndCostGLAccount',
        'YearEndReflectionGLAccount'
    ];

    protected $url = 'financial/GLAccounts';

}
