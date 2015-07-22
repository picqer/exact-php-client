<?php namespace Picqer\Financials\Exact;

class GLAccount extends Model {

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Code'
    ];

    protected $url = 'financial/GLAccounts';

}
