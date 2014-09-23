<?php namespace Picqer\Financials\Exact;

class Item extends Model {

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Code',
        'CostPriceStandard',
        'Division',
        'Description',
        'ID',
        'IsSalesItem'
    ];

    protected $url = 'logistics/Items';

}