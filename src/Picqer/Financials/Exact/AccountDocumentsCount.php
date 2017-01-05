<?php namespace Picqer\Financials\Exact;

/**
 * Class AccountDocumentsCount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadCRMAccountDocumentsCount
 * 
 * @property Int64 $AccountDocumentsCount 
 */
class AccountDocumentsCount extends Model
{
    use Query\Relatable;

    /**
     * @var string Name of the parent key for this model
     */
    protected $parentKey = 'accountId';

    protected $fillable = [
        'AccountDocumentsCount'
    ];

    protected $url = 'read/crm/AccountDocumentsCount';

}
