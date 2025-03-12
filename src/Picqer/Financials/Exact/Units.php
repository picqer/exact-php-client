<?php

namespace Picqer\Financials\Exact;

trigger_error(
    sprintf(
        '"%s" is deprecated due to an invalid naming convention, use "%s" instead',
        Units::class,
        Unit::class
    ),
    E_USER_DEPRECATED
);

/**
 * @deprecated since 4.5.0, use \Picqer\Financials\Exact\Unit instead, to be removed in 5.0
 */
class Units extends Unit
{
}
