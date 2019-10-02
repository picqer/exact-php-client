<?php

namespace Picqer\Financials\Exact;

/**
 * Class BulkTransactionLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=BulkFinancialTransactionLines
 */
class BulkTransactionLine extends TransactionLine
{
    protected $url = 'bulk/Financial/TransactionLines';
}
