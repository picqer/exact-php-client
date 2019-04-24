<?php

namespace Picqer\Financials\Exact;

use Picqer\Financials\Exact\TransactionLine;

/**
 * Class BulkTransactionLine
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=BulkFinancialTransactionLines
 */
class BulkTransactionLine extends TransactionLine
{
    protected $url = 'bulk/Financial/TransactionLines';
}
