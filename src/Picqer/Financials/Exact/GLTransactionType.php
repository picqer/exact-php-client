<?php

namespace Picqer\Financials\Exact;

/**
 * Class GLTransactionType
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialGLTransactionTypes
 *
 * @property Int32 $ID 
 * @property String $Description 
 * @property String $DescriptionSuffix 
 */
class GLTransactionType extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Description',
        'DescriptionSuffix',
    ];

    protected $url = 'financial/GLTransactionTypes';

}
