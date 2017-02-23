<?php namespace Picqer\Financials\Exact;

/**
 * Class AcceptQuotation
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAcceptQuotation
 * 
 * @property Guid $QuotationID Identifier of the quotation.
 * @property Int32 $Action 0 = No action (Default), 1 = create sales order, 2 = create sales invoice, 3 = create project.
 * @property Boolean $CreateProjectWBS Create a project work breakdown structure. Only needed when ProjectBudgetType = 2.
 * @property Int32 $Division Division code
 * @property String $ErrorMessage Contains the error message if an error occurred during the acception of the quotation.
 * @property Int32 $InvoiceJournal The journal in which the sales invoice will be booked. Mandatory for Action = 2.
 * @property Int32 $ProjectBudgetType The budget type of the project that will be created. Default = 0.
 * @property String $ProjectCode The code of the project that will be created. Mandatory for Action = 3.
 * @property String $ProjectDescription The description of the project that will be created. Mandatory for Action = 3.
 * @property DateTime $ProjectInvoiceDate The invoicing date of the project. Mandatory for ProjectInvoicingAction = 2.
 * @property Int32 $ProjectInvoicingAction The project invoicing action. 0 = None (Default), 1 = Create invoice terms, 2 = As quoted.
 * @property Int32 $ProjectPrepaindTypes The prepaid type. Mandatory for ProjectType = 5. 1 = Retainer, 2 = Hour type bundle.
 * @property Double $ProjectPriceAgreement PriceAgreement.
 * @property String $ProjectSuccess Contains information if the project was successfully created.
 * @property Int32 $ProjectType The type of the project that will be created. 2 = Fixed price (Default), 3 = Time and Material, 4 = Non billable, 5 = Prepaid.
 * @property Guid $ReasonCode Reason why the quotation was accepted.
 * @property String $SalesInvoiceSuccess Contains information if the sales invoice was successfully created.
 * @property String $SalesOrderSuccess Contains information if the sales order was successfully created.
 * @property String $SuccessMessage Contains information if the quotation was successfully accepted.
 */
class AcceptQuotation extends Model
{
    use Persistance\Storable;

    /**
     * @var string Name of the primary key for this model because it is different than ID
     */
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
        'SuccessMessage'
    ];

    protected $url = 'crm/AcceptQuotation';

}
