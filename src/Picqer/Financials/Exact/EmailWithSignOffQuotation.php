<?php

namespace Picqer\Financials\Exact;

/**
 * Class EmailWithSignOffQuotation.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMEmailWithSignOffQuotation
 *
 * @property string $QuotationID Identifier of the quotation.
 * @property string $AcceptEmailLayout If you enter for this field, your customer receives an email with the quotation after approval of the quotation.
 * @property int $Action 0 = No action (Default), 1 = create sales order, 2 = create sales invoice, 3 = create project, 4 = add to existing project, 5 = create subscription
 * @property bool $AllowProvideYourRef Allow customers to enter their purchase order number.
 * @property bool $CreateItemPriceAgreement Create a project item price agreement. Only needed when Action = 3 or Action = 4. Default = True.
 * @property bool $CreateProjectWBS Create a project work breakdown structure. Only needed when ProjectBudgetType = 2.
 * @property int $Division Division code.
 * @property string $DocumentLayout Based on this layout a PDF is created and attached to an Exact Online document and an email. In case it is not specified, the default layout is used.
 * @property string $EmailLayout Based on this layout the email text is produced.
 * @property string $ErrorMessage Contains the error message if an error occurred during the creation of the Email.
 * @property string $ExtraText Extra text that can be added to the printed document and email.
 * @property string $InvoiceJournal The journal in which the sales invoice will be booked. Mandatory for Action = 2.
 * @property int $ProjectBudgetType The budget type of the project that will be created. 0 = None (Default), 1 = Hours per hour type, 2 = Work breakdown structure (WBS).
 * @property string $ProjectClassification The ID of the project classification.
 * @property string $ProjectCode The code of the project that will be created. Mandatory for Action = 3.
 * @property string $ProjectDescription The description of the project that will be created. Mandatory for Action = 3.
 * @property string $ProjectID The ID of the project that will be linked to the quotation. Mandatory for Action = 4. For Action = 5, project will be linked to the subscription created.
 * @property string $ProjectInvoiceDate The invoicing date of the project. Mandatory for ProjectInvoicingAction = 2.
 * @property int $ProjectInvoicingAction The project invoicing action. 0 = None (Default), 1 = Create invoice terms, 2 = As quoted.
 * @property int $ProjectPrepaidTypes The prepaid type. Mandatory for ProjectType = 5. 1 = Retainer, 2 = Hour type bundle.
 * @property float $ProjectPriceAgreement Price agreement.
 * @property int $ProjectType The type of the project that will be created. 2 = Fixed price (Default), 3 = Time and Material, 4 = Non billable, 5 = Prepaid.
 * @property string $ProjectWBSPartOf The ID of the WBS deliverable part of. Only needed when Action = 4 and CreateProjectWBS = True.
 * @property string $QuotationDate Date of the quotation printed.
 * @property string $RejectEmailLayout If you enter for this field, your customer receives an email informing them of the rejected quotation.
 * @property string $SenderEmailAddress Email address from which the email will be sent. If not specified, the company email address will be used.
 * @property string $Subject Subject of the email. If LayoutEmailSubject featureset is enabled, subject in email text layout will be used.
 * @property string $SubscriptionDate The start date of the subscription. Mandatory for Action = 5.
 * @property string $SubscriptionDescription The description of the subscription that will be created. Mandatory for Action = 5.
 * @property string $SubscriptionType The ID of the subscription condition. Mandatory for Action = 5.
 * @property string $SuccessMessage Contains information if the quotation was successfully sent.
 * @property bool $UpdateProjectBudgetAndPriceAgreement Update project budget, price agreement and hours. Only needed when Action = 4. Default = True.
 * @property string $YourRef The number by which this quotation is identified by the order account.
 */
class EmailWithSignOffQuotation extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'QuotationID';

    protected $fillable = [
        'QuotationID',
        'AcceptEmailLayout',
        'Action',
        'AllowProvideYourRef',
        'CreateItemPriceAgreement',
        'CreateProjectWBS',
        'Division',
        'DocumentLayout',
        'EmailLayout',
        'ErrorMessage',
        'ExtraText',
        'InvoiceJournal',
        'ProjectBudgetType',
        'ProjectClassification',
        'ProjectCode',
        'ProjectDescription',
        'ProjectID',
        'ProjectInvoiceDate',
        'ProjectInvoicingAction',
        'ProjectPrepaidTypes',
        'ProjectPriceAgreement',
        'ProjectType',
        'ProjectWBSPartOf',
        'QuotationDate',
        'RejectEmailLayout',
        'SenderEmailAddress',
        'Subject',
        'SubscriptionDate',
        'SubscriptionDescription',
        'SubscriptionType',
        'SuccessMessage',
        'UpdateProjectBudgetAndPriceAgreement',
        'YourRef',
    ];

    protected $url = 'crm/EmailWithSignOffQuotation';
}
