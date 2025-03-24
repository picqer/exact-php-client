<?php

namespace Picqer\Financials\Exact;

trigger_error(
    sprintf(
        '"%s" is deprecated due to an invalid naming convention, use "%s" instead',
        SyncStockPosition::class,
        SyncInventoryStockPosition::class
    ),
    E_USER_DEPRECATED
);

/**
 * @deprecated since 4.5.2, use \Picqer\Financials\Exact\SyncInventoryStockPosition instead, to be removed in 5.0
 */
class SyncStockPosition extends SyncInventoryStockPosition
{
}
