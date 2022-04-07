<?php

namespace Picqer\Financials\Exact;

/*
 * Added deprecated BillOfMaterialMaterials class for backward compatibility
 */
class_alias(ProjectTimeTransaction::class, __NAMESPACE__ . '\TimeTransaction');
