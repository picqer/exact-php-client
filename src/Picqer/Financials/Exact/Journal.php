<?php namespace Picqer\Financials\Exact;

class Journal extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Code',
        'Division',
        'Description',
        'ID',
        'Type',
    ];

    protected $url = 'financial/Journals';

}
