<?php

namespace Picqer\Financials\Exact;

/**
 * Class Account
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=crmAccounts
 *
 * @property Guid $ID Primary key
 * @property Guid $Accountant Reference to the accountant of the customer. Conditions: The referred accountant must have value > 0 in the field IsAccountant
 * @property Guid $AccountManager ID of the account manager
 * @property String $AccountManagerFullName Name of the account manager
 * @property Int32 $AccountManagerHID Number of the account manager
 * @property Guid $ActivitySector Reference to Activity sector of the account
 * @property Guid $ActivitySubSector Reference to Activity sub-sector of the account
 * @property String $AddressLine1 Visit address first line
 * @property String $AddressLine2 Visit address second line
 * @property String $AddressLine3 Visit address third line
 * @property BankAccounts $BankAccounts Collection of Bank accounts
 * @property Boolean $Blocked Indicates if the account is blocked
 * @property Guid $BusinessType Reference to the business type of the account
 * @property Boolean $CanDropShip Indicates the default for the possibility to drop ship when an item is linked to a supplier
 * @property String $ChamberOfCommerce Chamber of commerce number
 * @property String $City Visit address City
 * @property Guid $Classification1 Account classification 1
 * @property Guid $Classification2 Account classification 2
 * @property Guid $Classification3 Account classification 3
 * @property Guid $Classification4 Account classification 4
 * @property Guid $Classification5 Account classification 5
 * @property Guid $Classification6 Account classification 6
 * @property Guid $Classification7 Account classification 7
 * @property Guid $Classification8 Account classification 8
 * @property String $Code Unique key, fixed length numeric string with leading spaces, length 18. IMPORTANT: When you use OData $filter on this field you have to make sure the filter parameter contains the leading spaces
 * @property String $CodeAtSupplier Code under which your own company is known at the account
 * @property Guid $CompanySize Reference to Company size of the account
 * @property Byte $ConsolidationScenario Consolidation scenario (Time & Billing). Values: 0 = No consolidation, 1 = Item, 2 = Item + Project, 3 = Item + Employee, 4 = Item + Employee + Project. Item means in this case including Unit and Price, these also have to be the same to consolidate
 * @property DateTime $ControlledDate Date of the latest control of account data with external web service
 * @property String $Country Country code
 * @property String $CountryName Country name
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property Double $CreditLinePurchase Maximum amount of credit for Purchase. If no value has been defined, there is no credit limit
 * @property Double $CreditLineSales Maximum amount of credit for sales. If no value has been defined, there is no credit limit
 * @property Double $DiscountPurchase Default discount percentage for purchase. This is stored as a fraction. ie 5.5% is stored as .055
 * @property Double $DiscountSales Default discount percentage for sales. This is stored as a fraction. ie 5.5% is stored as .055
 * @property Int32 $Division Division code
 * @property String $Email E-Mail address of the account
 * @property DateTime $EndDate Determines in combination with the start date if the account is active. If the current date is > end date the account is inactive
 * @property String $Fax Fax number
 * @property Guid $GLAccountPurchase Default (corporate) GL offset account for purchase (cost)
 * @property Guid $GLAccountSales Default (corporate) GL offset account for sales (revenue)
 * @property Guid $GLAP Default GL account for Accounts Payable
 * @property Guid $GLAR Default GL account for Accounts Receivable
 * @property String $IntraStatArea Intrastat Area
 * @property String $IntraStatDeliveryTerm Intrastat delivery method
 * @property String $IntraStatSystem System for Intrastat
 * @property String $IntraStatTransactionA Transaction type A for Intrastat
 * @property String $IntraStatTransactionB Transaction type B for Intrastat
 * @property String $IntraStatTransportMethod Transport method for Intrastat
 * @property Guid $InvoiceAccount ID of account to be invoiced instead of this account
 * @property String $InvoiceAccountCode Code of InvoiceAccount
 * @property String $InvoiceAccountName Name of InvoiceAccount
 * @property Int32 $InvoiceAttachmentType Indicates which attachment types should be sent when a sales invoice is printed. Only values in related table with Invoice=1 are allowed
 * @property Int32 $InvoicingMethod Method of sending for sales invoices. Values: 1: Paper, 2: EMail, 4: Mailbox (electronic exchange)
 * @property Guid $IsAccountant Reference to the accountant of the customer. Conditions: The referred accountant must have value > 0 in the field IsAccountant
 * @property Byte $IsAgency Indicates whether the accounti is an agency
 * @property Byte $IsCompetitor Indicates whether the account is a competitor
 * @property Byte $IsMailing Indicates if the account is excluded from mailing marketing information
 * @property Boolean $IsPilot Indicates whether the account is a pilot account
 * @property Boolean $IsReseller Indicates whether the account is a reseller
 * @property Boolean $IsSales Indicates whether the account is allowed for sales
 * @property Boolean $IsSupplier Indicates whether the account is a supplier
 * @property String $Language Language code
 * @property String $LanguageDescription Language description
 * @property Double $Latitude Latitude (used by Google maps)
 * @property Guid $LeadSource Reference to Lead source of an account
 * @property Binary $Logo Bytes of the logo image
 * @property String $LogoFileName The file name (without path, but with extension) of the image
 * @property String $LogoThumbnailUrl Thumbnail url of the logo
 * @property String $LogoUrl Url to retrieve the logo
 * @property Double $Longitude Longitude (used by Google maps)
 * @property Guid $MainContact Reference to main contact person
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Name Name of the account manager
 * @property String $PaymentConditionPurchase Code of default payment condition for purchase
 * @property String $PaymentConditionPurchaseDescription Description of PaymentConditionPurchase
 * @property String $PaymentConditionSales Code of default payment condition for sales
 * @property String $PaymentConditionSalesDescription Description of PaymentConditionSales
 * @property String $Phone Phone number
 * @property String $PhoneExtension Phone number extention
 * @property String $Postcode Visit address postcode
 * @property Guid $PriceList Default sales price list for account
 * @property String $PurchaseCurrency Currency of purchase
 * @property String $PurchaseCurrencyDescription Description of PurchaseCurrency
 * @property Int32 $PurchaseLeadDays Indicates number of days required to receive a purchase. Acts as a default
 * @property String $PurchaseVATCode Default VAT code used for purchase entries
 * @property String $PurchaseVATCodeDescription Description of PurchaseVATCode
 * @property Boolean $RecepientOfCommissions Define the relation that should be taken in the official document of the rewarding fiscal fiches Belcotax
 * @property String $Remarks Remarks
 * @property Boolean $Reseller Indicates whether the account is a reseller
 * @property String $ResellerCode Code of Reseller
 * @property String $ResellerName Name of Reseller
 * @property String $SalesCurrency Currency of Sales used for Time & Billing
 * @property String $SalesCurrencyDescription Description of SalesCurrency
 * @property Guid $SalesTaxSchedule Default tax schedule when creating sales orders or sales invoices
 * @property String $SalesTaxScheduleCode Code of the tax schedule
 * @property String $SalesTaxScheduleDescription Description of the tax schedule
 * @property String $SalesVATCode Default VAT code for a sales entry
 * @property String $SalesVATCodeDescription Description of SalesVATCode
 * @property String $SearchCode Search code
 * @property Int32 $SecurityLevel Security level (0 - 100)
 * @property Byte $SeparateInvPerProject Separate invoice per project (Time & Billing)
 * @property Byte $SeparateInvPerSubscription Indicates how invoices are generated from subscriptions. 0 = subscriptions belonging to the same customer are combined in a single invoice. 1 = each subscription results in one invoice. In both cases, each individual subscription line results in one invoice line
 * @property Int32 $ShippingLeadDays Indicates the number of days it takes to send goods to the customer. Acts as a default
 * @property Guid $ShippingMethod Default shipping method
 * @property DateTime $StartDate Indicates in combination with the end date if the account is active
 * @property String $State State/Province code
 * @property String $StateName Name of State
 * @property String $Status If the status field is filled this means the account is a customer. The value indicates the customer status. Possible values: A=None, S=Suspect, P=Prospect, C=Customer
 * @property Guid $Type Reference to the business type of the account
 * @property String $VATLiability Indicates the VAT status of an account to be able to identify the relation that should be selected in the VAT debtor listing in Belgium
 * @property String $VATNumber The number under which the account is known at the Value Added Tax collection agency
 * @property String $Website Website of the account
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
        'BusinessType',
        'CanDropShip',
        'ChamberOfCommerce',
        'City',
        'Classification1',
        'Classification2',
        'Classification3',
        'Classification4',
        'Classification5',
        'Classification6',
        'Classification7',
        'Classification8',
        'Code',
        'CodeAtSupplier',
        'CompanySize',
        'ConsolidationScenario',
        'ControlledDate',
        'Country',
        'CountryName',
        'Created',
        'Creator',
        'CreatorFullName',
        'CreditLinePurchase',
        'CreditLineSales',
        'DiscountPurchase',
        'DiscountSales',
        'Division',
        'Email',
        'EndDate',
        'Fax',
        'GLAccountPurchase',
        'GLAccountSales',
        'GLAP',
        'GLAR',
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
        'IsCompetitor',
        'IsMailing',
        'IsPilot',
        'IsReseller',
        'IsSales',
        'IsSupplier',
        'Language',
        'LanguageDescription',
        'Latitude',
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
        'Type',
        'VATLiability',
        'VATNumber',
        'Website',
    ];

    protected $url = 'crm/Accounts';
}
