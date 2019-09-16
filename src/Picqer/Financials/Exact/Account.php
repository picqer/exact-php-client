<?php

namespace Picqer\Financials\Exact;

/**
 * Class Account.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMAccounts
 *
 * @property string $ID Primary key
 * @property string $Accountant Reference to the accountant of the customer. Conditions: The referred accountant must have value > 0 in the field IsAccountant
 * @property string $AccountManager ID of the account manager
 * @property string $AccountManagerFullName Name of the account manager
 * @property int $AccountManagerHID Number of the account manager
 * @property string $ActivitySector Reference to Activity sector of the account
 * @property string $ActivitySubSector Reference to Activity sub-sector of the account
 * @property string $AddressLine1 Visit address first line
 * @property string $AddressLine2 Visit address second line
 * @property string $AddressLine3 Visit address third line
 * @property bankaccounts $BankAccounts Collection of Bank accounts
 * @property bool $Blocked Indicates if the account is blocked
 * @property string $BRIN Obsolete
 * @property string $BusinessType Reference to the business type of the account
 * @property bool $CanDropShip Indicates the default for the possibility to drop ship when an item is linked to a supplier
 * @property string $ChamberOfCommerce Chamber of commerce number
 * @property string $City Visit address City
 * @property string $Classification Obsolete
 * @property string $Classification1 Account classification 1
 * @property string $Classification2 Account classification 2
 * @property string $Classification3 Account classification 3
 * @property string $Classification4 Account classification 4
 * @property string $Classification5 Account classification 5
 * @property string $Classification6 Account classification 6
 * @property string $Classification7 Account classification 7
 * @property string $Classification8 Account classification 8
 * @property string $ClassificationDescription Obsolete
 * @property string $Code Unique key, fixed length numeric string with leading spaces, length 18. IMPORTANT: When you use OData $filter on this field you have to make sure the filter parameter contains the leading spaces
 * @property string $CodeAtSupplier Code under which your own company is known at the account
 * @property string $CompanySize Reference to Company size of the account
 * @property int $ConsolidationScenario Consolidation scenario (Time & Billing). Values: 0 = No consolidation, 1 = Item, 2 = Item + Project, 3 = Item + Employee, 4 = Item + Employee + Project, 5 = Project + WBS + Item, 6 = Project + WBS + Item + Employee. Item means in this case including Unit and Price, these also have to be the same to consolidate
 * @property string $ControlledDate Date of the latest control of account data with external web service
 * @property string $Costcenter Obsolete
 * @property string $CostcenterDescription Obsolete
 * @property int $CostPaid Obsolete
 * @property string $Country Country code
 * @property string $CountryName Country name
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property float $CreditLinePurchase Maximum amount of credit for Purchase. If no value has been defined, there is no credit limit
 * @property float $CreditLineSales Maximum amount of credit for sales. If no value has been defined, there is no credit limit
 * @property string $Currency Obsolete
 * @property string $CustomerSince Obsolete
 * @property string $DatevCreditorCode DATEV creditor code for Germany legislation
 * @property string $DatevDebtorCode DATEV debtor code for Germany legislation
 * @property float $DiscountPurchase Default discount percentage for purchase. This is stored as a fraction. ie 5.5% is stored as .055
 * @property float $DiscountSales Default discount percentage for sales. This is stored as a fraction. ie 5.5% is stored as .055
 * @property int $Division Division code
 * @property string $Document Obsolete
 * @property string $DunsNumber Obsolete
 * @property string $Email E-Mail address of the account
 * @property string $EndDate Determines in combination with the start date if the account is active. If the current date is > end date the account is inactive
 * @property string $EstablishedDate RegistrationDate
 * @property string $Fax Fax number
 * @property string $GLAccountPurchase Default (corporate) GL offset account for purchase (cost)
 * @property string $GLAccountSales Default (corporate) GL offset account for sales (revenue)
 * @property string $GLAP Default GL account for Accounts Payable
 * @property string $GLAR Default GL account for Accounts Receivable
 * @property string $GlnNumber Global Location Number can be used by companies to identify their locations, giving them complete flexibility to identify any type or level of location required
 * @property bool $HasWithholdingTaxSales Indicates whether a customer has withholding tax on sales
 * @property bool $IgnoreDatevWarningMessage Suppressed warning message when there is duplication on the DATEV code
 * @property string $IntraStatArea Intrastat Area
 * @property string $IntraStatDeliveryTerm Intrastat delivery method
 * @property string $IntraStatSystem System for Intrastat
 * @property string $IntraStatTransactionA Transaction type A for Intrastat
 * @property string $IntraStatTransactionB Transaction type B for Intrastat
 * @property string $IntraStatTransportMethod Transport method for Intrastat
 * @property string $InvoiceAccount ID of account to be invoiced instead of this account
 * @property string $InvoiceAccountCode Code of InvoiceAccount
 * @property string $InvoiceAccountName Name of InvoiceAccount
 * @property int $InvoiceAttachmentType Indicates which attachment types should be sent when a sales invoice is printed. Only values in related table with Invoice=1 are allowed
 * @property int $InvoicingMethod Method of sending for sales invoices. Values: 1: Paper, 2: EMail, 4: Mailbox (electronic exchange)
 * @property int $IsAccountant Indicates whether the account is an accountant. Values: 0 = No accountant, 1 = True, but accountant doesn't want his name to be published in the list of accountants, 2 = True, and accountant is published in the list of accountants
 * @property int $IsAgency Indicates whether the accounti is an agency
 * @property int $IsAnonymised Indicates whtether the account is anonymised.
 * @property bool $IsBank Obsolete
 * @property int $IsCompetitor Indicates whether the account is a competitor
 * @property bool $IsExtraDuty Indicates whether a customer is eligible for extra duty
 * @property int $IsMailing Indicates if the account is excluded from mailing marketing information
 * @property bool $IsMember Obsolete
 * @property bool $IsPilot Indicates whether the account is a pilot account
 * @property bool $IsPurchase Obsolete
 * @property bool $IsReseller Indicates whether the account is a reseller
 * @property bool $IsSales Indicates whether the account is allowed for sales
 * @property bool $IsSupplier Indicates whether the account is a supplier
 * @property string $Language Language code
 * @property string $LanguageDescription Language description
 * @property float $Latitude Latitude (used by Google maps)
 * @property string $LeadPurpose Reference to Lead purpose of an account
 * @property string $LeadSource Reference to Lead source of an account
 * @property binary $Logo Bytes of the logo image
 * @property string $LogoFileName The file name (without path, but with extension) of the image
 * @property string $LogoThumbnailUrl Thumbnail url of the logo
 * @property string $LogoUrl Url to retrieve the logo
 * @property float $Longitude Longitude (used by Google maps)
 * @property string $MainContact Reference to main contact person
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Name Account name
 * @property string $OINNumber Dutch government identification number
 * @property string $Parent ID of the parent account
 * @property string $PayAsYouEarn Indicates the loan repayment plan for UK legislation
 * @property string $PaymentConditionPurchase Code of default payment condition for purchase
 * @property string $PaymentConditionPurchaseDescription Description of PaymentConditionPurchase
 * @property string $PaymentConditionSales Code of default payment condition for sales
 * @property string $PaymentConditionSalesDescription Description of PaymentConditionSales
 * @property string $Phone Phone number
 * @property string $PhoneExtension Phone number extention
 * @property string $Postcode Visit address postcode
 * @property string $PriceList Default sales price list for account
 * @property string $PurchaseCurrency Currency of purchase
 * @property string $PurchaseCurrencyDescription Description of PurchaseCurrency
 * @property int $PurchaseLeadDays Indicates number of days required to receive a purchase. Acts as a default
 * @property string $PurchaseVATCode Default VAT code used for purchase entries
 * @property string $PurchaseVATCodeDescription Description of PurchaseVATCode
 * @property bool $RecepientOfCommissions Define the relation that should be taken in the official document of the rewarding fiscal fiches Belcotax
 * @property string $Remarks Remarks
 * @property string $Reseller ID of the reseller account. Conditions: the target account must have the property IsReseller turned on
 * @property string $ResellerCode Code of Reseller
 * @property string $ResellerName Name of Reseller
 * @property string $RSIN Fiscal number for NL legislation
 * @property string $SalesCurrency Currency of Sales used for Time & Billing
 * @property string $SalesCurrencyDescription Description of SalesCurrency
 * @property string $SalesTaxSchedule Obsolete
 * @property string $SalesTaxScheduleCode Obsolete
 * @property string $SalesTaxScheduleDescription Obsolete
 * @property string $SalesVATCode Default VAT code for a sales entry
 * @property string $SalesVATCodeDescription Description of SalesVATCode
 * @property string $SearchCode Search code
 * @property int $SecurityLevel Security level (0 - 100)
 * @property int $SeparateInvPerProject Separate invoice per project (Time & Billing)
 * @property int $SeparateInvPerSubscription Indicates how invoices are generated from subscriptions. 0 = subscriptions belonging to the same customer are combined in a single invoice. 1 = each subscription results in one invoice. In both cases, each individual subscription line results in one invoice line
 * @property int $ShippingLeadDays Indicates the number of days it takes to send goods to the customer. Acts as a default
 * @property string $ShippingMethod Default shipping method
 * @property string $StartDate Indicates in combination with the end date if the account is active
 * @property string $State State/Province/County code When changing the Country and the State is filled, the State must be assigned with a valid value from the selected country or set to empty
 * @property string $StateName Name of State
 * @property string $Status If the status field is filled this means the account is a customer. The value indicates the customer status. Possible values: A=None, S=Suspect, P=Prospect, C=Customer
 * @property string $StatusSince Obsolete
 * @property string $TradeName Trade name can be registered and shown with the client (for all legislations)
 * @property string $Type Account type: Values: A = Relation, D = Division
 * @property string $UniqueTaxpayerReference Unique taxpayer reference for UK legislation
 * @property string $VATLiability Indicates the VAT status of an account to be able to identify the relation that should be selected in the VAT debtor listing in Belgium
 * @property string $VATNumber The number under which the account is known at the Value Added Tax collection agency
 * @property string $Website Website of the account
 */
class Account extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Accountant',
        'AccountManager',
        'AccountManagerFullName',
        'AccountManagerHID',
        'ActivitySector',
        'ActivitySubSector',
        'AddressLine1',
        'AddressLine2',
        'AddressLine3',
        'BankAccounts',
        'Blocked',
        'BRIN',
        'BusinessType',
        'CanDropShip',
        'ChamberOfCommerce',
        'City',
        'Classification',
        'Classification1',
        'Classification2',
        'Classification3',
        'Classification4',
        'Classification5',
        'Classification6',
        'Classification7',
        'Classification8',
        'ClassificationDescription',
        'Code',
        'CodeAtSupplier',
        'CompanySize',
        'ConsolidationScenario',
        'ControlledDate',
        'Costcenter',
        'CostcenterDescription',
        'CostPaid',
        'Country',
        'CountryName',
        'Created',
        'Creator',
        'CreatorFullName',
        'CreditLinePurchase',
        'CreditLineSales',
        'Currency',
        'CustomerSince',
        'DatevCreditorCode',
        'DatevDebtorCode',
        'DiscountPurchase',
        'DiscountSales',
        'Division',
        'Document',
        'DunsNumber',
        'Email',
        'EndDate',
        'EstablishedDate',
        'Fax',
        'GLAccountPurchase',
        'GLAccountSales',
        'GLAP',
        'GLAR',
        'GlnNumber',
        'HasWithholdingTaxSales',
        'IgnoreDatevWarningMessage',
        'IntraStatArea',
        'IntraStatDeliveryTerm',
        'IntraStatSystem',
        'IntraStatTransactionA',
        'IntraStatTransactionB',
        'IntraStatTransportMethod',
        'InvoiceAccount',
        'InvoiceAccountCode',
        'InvoiceAccountName',
        'InvoiceAttachmentType',
        'InvoicingMethod',
        'IsAccountant',
        'IsAgency',
        'IsAnonymised',
        'IsBank',
        'IsCompetitor',
        'IsExtraDuty',
        'IsMailing',
        'IsMember',
        'IsPilot',
        'IsPurchase',
        'IsReseller',
        'IsSales',
        'IsSupplier',
        'Language',
        'LanguageDescription',
        'Latitude',
        'LeadPurpose',
        'LeadSource',
        'Logo',
        'LogoFileName',
        'LogoThumbnailUrl',
        'LogoUrl',
        'Longitude',
        'MainContact',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Name',
        'OINNumber',
        'Parent',
        'PayAsYouEarn',
        'PaymentConditionPurchase',
        'PaymentConditionPurchaseDescription',
        'PaymentConditionSales',
        'PaymentConditionSalesDescription',
        'Phone',
        'PhoneExtension',
        'Postcode',
        'PriceList',
        'PurchaseCurrency',
        'PurchaseCurrencyDescription',
        'PurchaseLeadDays',
        'PurchaseVATCode',
        'PurchaseVATCodeDescription',
        'RecepientOfCommissions',
        'Remarks',
        'Reseller',
        'ResellerCode',
        'ResellerName',
        'RSIN',
        'SalesCurrency',
        'SalesCurrencyDescription',
        'SalesTaxSchedule',
        'SalesTaxScheduleCode',
        'SalesTaxScheduleDescription',
        'SalesVATCode',
        'SalesVATCodeDescription',
        'SearchCode',
        'SecurityLevel',
        'SeparateInvPerProject',
        'SeparateInvPerSubscription',
        'ShippingLeadDays',
        'ShippingMethod',
        'StartDate',
        'State',
        'StateName',
        'Status',
        'StatusSince',
        'TradeName',
        'Type',
        'UniqueTaxpayerReference',
        'VATLiability',
        'VATNumber',
        'Website',
    ];

    protected $url = 'crm/Accounts';
}
