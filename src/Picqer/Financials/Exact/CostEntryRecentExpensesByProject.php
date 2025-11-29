<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentExpensesByProject.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentExpensesByProject
 *
 * @property string $ID Primary key
 * @property string $DateLastUsed Date last used
 * @property string $DefaultItem ID of the defaultItem
 * @property string $DefaultItemCode Item code of the defaultItem
 * @property string $DefaultItemDescription Description of the defaultItem
 * @property string $Description Description
 * @property string $ParentDescription Description of Parent
 */
class CostEntryRecentExpensesByProject extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;

    protected $fillable = [
        'ID',
        'DateLastUsed',
        'DefaultItem',
        'DefaultItemCode',
        'DefaultItemDescription',
        'Description',
        'ParentDescription',
    ];

    protected $url = 'read/project/CostEntryRecentExpensesByProject';
}
