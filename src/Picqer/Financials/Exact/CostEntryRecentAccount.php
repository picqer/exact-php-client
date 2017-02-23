<?php 

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentAccount
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentAccounts
 * 
 * @property Guid $AccountId Primary key
 * @property String $AccountName Name of account
 * @property DateTime $DateLastUsed Date last used
 */
class CostEntryRecentAccount extends Model
{
    use Query\Findable;
    use Query\Relatable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
    protected $primaryKey = 'AccountId';

    protected $fillable = [
        'AccountId',
        'AccountName',
        'DateLastUsed'
    ];

    protected $url = 'read/project/CostEntryRecentAccounts';

}
