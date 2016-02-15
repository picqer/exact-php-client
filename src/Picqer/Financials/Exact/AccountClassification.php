<?php namespace Picqer\Financials\Exact;

class AccountClassification extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AccountClassificationName',
        'AccountClassificationNameDescription',
        'Code',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Modified',
        'Modifier',
        'ModifierFullName',
    ];

    protected $url = 'crm/AccountClassifications';
}
