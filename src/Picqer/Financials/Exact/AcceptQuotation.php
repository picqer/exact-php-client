<?php

namespace Picqer\Financials\Exact;

/**
 * Class AcceptQuotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAcceptQuotation
 *
 * @property string $QuotationID Identifier of the quotation.
 * @property int $Action 0 = No action (Default), 1 = create sales order, 2 = create sales invoice, 3 = create project.
 * @property bool $CreateProjectWBS Create a project work breakdown structure. Only needed when ProjectBudgetType = 2.
 * @property int $Division Division code
 * @property string $ErrorMessage Contains the error message if an error occurred during the acception of the quotation.
 * @property string $InvoiceJournal The journal in which the sales invoice will be booked. Mandatory for Action = 2.
 * @property int $ProjectBudgetType The budget type of the project that will be created. Default = 0.
 * @property string $ProjectCode The code of the project that will be created. Mandatory for Action = 3.
 * @property string $ProjectDescription The description of the project that will be created. Mandatory for Action = 3.
 * @property string $ProjectInvoiceDate The invoicing date of the project. Mandatory for ProjectInvoicingAction = 2.
 * @property int $ProjectInvoicingAction The project invoicing action. 0 = None (Default), 1 = Create invoice terms, 2 = As quoted.
 * @property int $ProjectPrepaindTypes The prepaid type. Mandatory for ProjectType = 5. 1 = Retainer, 2 = Hour type bundle.
 * @property float $ProjectPriceAgreement PriceAgreement.
 * @property string $ProjectSuccess Contains information if the project was successfully created.
 * @property int $ProjectType The type of the project that will be created. 2 = Fixed price (Default), 3 = Time and Material, 4 = Non billable, 5 = Prepaid.
 * @property string $ReasonCode Reason why the quotation was accepted.
 * @property string $SalesInvoiceSuccess Contains information if the sales invoice was successfully created.
 * @property string $SalesOrderSuccess Contains information if the sales order was successfully created.
 * @property string $SuccessMessage Contains information if the quotation was successfully accepted.
 */
class AcceptQuotation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

    protected $fillable = [
        'QuotationID',
        'Action',
        'CreateProjectWBS',
        'Division',
        'ErrorMessage',
        'InvoiceJournal',
        'ProjectBudgetType',
        'ProjectCode',
        'ProjectDescription',
        'ProjectInvoiceDate',
        'ProjectInvoicingAction',
        'ProjectPrepaindTypes',
        'ProjectPriceAgreement',
        'ProjectSuccess',
        'ProjectType',
        'ReasonCode',
        'SalesInvoiceSuccess',
        'SalesOrderSuccess',
        'SuccessMessage',
    ];

    protected $url = 'crm/AcceptQuotation';
}
