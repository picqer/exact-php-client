<?php

namespace Picqer\Financials\Exact;

/**
 * Class AcceptQuotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAcceptQuotation
 *
 * @property string $QuotationID Identifier of the quotation.
 * @property int $Action 0 = No action (Default), 1 = create sales order, 2 = create sales invoice, 3 = create project, 4 = add to existing project.
 * @property string $AddToExistingProjectSuccess Contains information if the quotation was successfully added to existing project.
 * @property bool $CreateItemPriceAgreement Create a project item price agreement. Only needed when Action = 3 or Action = 4. Default = True.
 * @property bool $CreateProjectWBS Create a project work breakdown structure. Only needed when ProjectBudgetType = 2.
 * @property int $Division Division code
 * @property string $ErrorMessage Contains the error message if an error occurred during the acception of the quotation.
 * @property string $InvoiceJournal The journal in which the sales invoice will be booked. Mandatory for Action = 2.
 * @property string $NotificationLayout Based on this layout the notification email is sent. In case it is not specified, then no email is sent.
 * @property int $ProjectBudgetType The budget type of the project that will be created. Default = 0.
 * @property string $ProjectCode The code of the project that will be created. Mandatory for Action = 3.
 * @property string $ProjectDescription The description of the project that will be created. Mandatory for Action = 3.
 * @property string $ProjectID The ID of the project that will be linked to the quotation. Mandatory for Action = 4.
 * @property string $ProjectInvoiceDate The invoicing date of the project. Mandatory for ProjectInvoicingAction = 2.
 * @property int $ProjectInvoicingAction The project invoicing action. 0 = None (Default), 1 = Create invoice terms, 2 = As quoted.
 * @property int $ProjectPrepaindTypes The prepaid type. Mandatory for ProjectType = 5. 1 = Retainer, 2 = Hour type bundle.
 * @property float $ProjectPriceAgreement PriceAgreement.
 * @property string $ProjectSuccess Contains information if the project was successfully created.
 * @property int $ProjectType The type of the project that will be created. 2 = Fixed price (Default), 3 = Time and Material, 4 = Non billable, 5 = Prepaid.
 * @property string $ProjectWBSPartOf The ID of the WBS deliverable part of. Only needed when Action = 4 and CreateProjectWBS = True.
 * @property string $ReasonCode Reason why the quotation was accepted.
 * @property string $SalesInvoiceSuccess Contains information if the sales invoice was successfully created.
 * @property string $SalesOrderSuccess Contains information if the sales order was successfully created.
 * @property string $SuccessMessage Contains information if the quotation was successfully accepted.
 * @property bool $UpdateProjectBudgetAndPriceAgreement Update project budget, price agreement and hours. Only needed when Action = 4. Default = True.
 * @property string $YourRef The number by which this quotation is identified by the order account
 */
class AcceptQuotation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

    protected $fillable = [
        'QuotationID',
        'Action',
        'AddToExistingProjectSuccess',
        'CreateItemPriceAgreement',
        'CreateProjectWBS',
        'Division',
        'ErrorMessage',
        'InvoiceJournal',
        'NotificationLayout',
        'ProjectBudgetType',
        'ProjectCode',
        'ProjectDescription',
        'ProjectID',
        'ProjectInvoiceDate',
        'ProjectInvoicingAction',
        'ProjectPrepaindTypes',
        'ProjectPriceAgreement',
        'ProjectSuccess',
        'ProjectType',
        'ProjectWBSPartOf',
        'ReasonCode',
        'SalesInvoiceSuccess',
        'SalesOrderSuccess',
        'SuccessMessage',
        'UpdateProjectBudgetAndPriceAgreement',
        'YourRef',
    ];

    protected $url = 'crm/AcceptQuotation';
}
