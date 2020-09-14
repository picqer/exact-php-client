<?php

namespace Picqer\Tests;

use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Connection;

/**
 * Class EntityTest.
 *
 * Tests all entities to ensure entities have no PHP parse errors and have
 * at least the properties we need to use the entity
 */
class EntityTest extends TestCase
{
    public function testAbsenceRegistrationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AbsenceRegistration::class);
    }

    public function testAbsenceRegistrationTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AbsenceRegistrationTransaction::class);
    }

    public function testAcceptQuotationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AcceptQuotation::class);
    }

    public function testAccountantInfoEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountantInfo::class);
    }

    public function testAccountClassificationNameEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountClassificationName::class);
    }

    public function testAccountClassificationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountClassification::class);
    }

    public function testAccountClassEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountClass::class);
    }

    public function testAccountDocumentCountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountDocumentCount::class);
    }

    public function testAccountDocumentFolderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountDocumentFolder::class);
    }

    public function testAccountDocumentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountDocument::class);
    }

    public function testAccountInvolvedAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountInvolvedAccount::class);
    }

    public function testAccountItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountItem::class);
    }

    public function testAccountOwnerEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountOwner::class);
    }

    public function testAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Account::class);
    }

    public function testActiveEmploymentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ActiveEmployment::class);
    }

    public function testAddressEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Address::class);
    }

    public function testAddressStateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AddressState::class);
    }

    public function testCurrentYearAfterEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CurrentYearAfterEntry::class);
    }

    public function testPreviousYearAfterEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PreviousYearAfterEntry::class);
    }

    public function testAgingOverviewByAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AgingOverviewByAccount::class);
    }

    public function testAgingOverviewEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AgingOverview::class);
    }

    public function testAgingPayablesListByAgeGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AgingPayablesListByAgeGroup::class);
    }

    public function testAgingPayablesListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AgingPayablesList::class);
    }

    public function testAgingReceivablesListByAgeGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AgingReceivablesListByAgeGroup::class);
    }

    public function testAgingReceivablesListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AgingReceivablesList::class);
    }

    public function testAssemblyOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AssemblyOrder::class);
    }

    public function testAssetGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AssetGroup::class);
    }

    public function testAssetEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Asset::class);
    }

    public function testAvailableFeatureEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AvailableFeature::class);
    }

    public function testBankAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BankAccount::class);
    }

    public function testBankEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BankEntryLine::class);
    }

    public function testBankEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BankEntry::class);
    }

    public function testBankEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Bank::class);
    }

    public function testBatchNumberEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BatchNumber::class);
    }

    public function testBillOfMaterialMaterialEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BillOfMaterialMaterial::class);
    }

    public function testBillOfMaterialVersionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BillOfMaterialVersion::class);
    }

    public function testBillOfMaterialVersionsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BillOfMaterialVersion::class);
    }

    public function testBudgetEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Budget::class);
    }

    public function testBudgetScenarioEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BudgetScenario::class);
    }

    public function testBulkAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkAccount::class);
    }

    public function testBulkAddressEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkAddress::class);
    }

    public function testBulkContactEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkContact::class);
    }

    public function testBulkDocumentAttachmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentAttachment::class);
        $documentAttachment = new \Picqer\Financials\Exact\DocumentAttachment(new Connection());
        $documentAttachment->Url = 'http://www.example.org/index.html?id=123';

        $this->assertSame('http://www.example.org/index.html?id=123&Download=1', $documentAttachment->getDownloadUrl());
    }

    public function testBulkDocumentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkDocument::class);
    }

    public function testBulkGLAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkGLAccount::class);
    }

    public function testBulkGLClassificationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkGLClassification::class);
    }

    public function testBulkGoodsDeliveryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkGoodsDeliveryLine::class);
    }

    public function testBulkGoodsDeliveryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkGoodsDelivery::class);
    }

    public function testBulkItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkItem::class);
    }

    public function testBulkPaymentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkPayment::class);
    }

    public function testBulkQuotationLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkQuotationLine::class);
    }

    public function testBulkQuotationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkQuotation::class);
    }

    public function testBulkReceivableEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkReceivable::class);
    }

    public function testBulkSalesInvoiceLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkSalesInvoiceLine::class);
    }

    public function testBulkSalesInvoiceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkSalesInvoice::class);
    }

    public function testBulkSalesItemPriceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkSalesItemPrice::class);
    }

    public function testBulkSalesOrderLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkSalesOrderLine::class);
    }

    public function testBulkSalesOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkSalesOrder::class);
    }

    public function testBulkTransactionLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BulkTransactionLine::class);
    }

    public function testByProductReceiptEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ByProductReceipt::class);
    }

    public function testByProductReversalEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ByProductReversal::class);
    }

    public function testCashEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CashEntryLine::class);
    }

    public function testCashEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CashEntry::class);
    }

    public function testCommunicationNoteEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CommunicationNote::class);
    }

    public function testComplaintEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Complaint::class);
    }

    public function testContactEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Contact::class);
    }

    public function testCostcenterEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Costcenter::class);
    }

    public function testCostEntryExpensesByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostEntryExpensesByProject::class);
    }

    public function testCostEntryRecentAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostEntryRecentAccount::class);
    }

    public function testCostEntryRecentAccountsByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostEntryRecentAccountsByProject::class);
    }

    public function testCostEntryRecentCostTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostEntryRecentCostType::class);
    }

    public function testCostEntryRecentCostTypesByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostEntryRecentCostTypesByProject::class);
    }

    public function testCostEntryRecentExpensesByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostEntryRecentExpensesByProject::class);
    }

    public function testCostEntryRecentProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostEntryRecentProject::class);
    }

    public function testCostsByDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostsByDate::class);
    }

    public function testCostsByIdEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostsById::class);
    }

    public function testCostTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostTransaction::class);
    }

    public function testCostTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostType::class);
    }

    public function testCostTypesByDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostTypesByDate::class);
    }

    public function testCostTypesByProjectAndDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostTypesByProjectAndDate::class);
    }

    public function testCostunitEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Costunit::class);
    }

    public function testCurrencyEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Currency::class);
    }

    public function testDefaultAddressForAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DefaultAddressForAccount::class);
    }

    public function testDefaultMailboxEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DefaultMailbox::class);
    }

    public function testDepartmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Department::class);
    }

    public function testDepreciationMethodEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DepreciationMethod::class);
    }

    public function testDirectDebitMandateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DirectDebitMandate::class);
    }

    public function testDivisionClasseEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DivisionClass::class);
    }

    public function testDivisionClassNameEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DivisionClassName::class);
    }

    public function testDivisionClassEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DivisionClass::class);
    }

    public function testDivisionClassValueEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DivisionClassValue::class);
    }

    public function testDivisionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Division::class);
    }

    public function testDocumentAttachmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentAttachment::class);
        $documentAttachment = new \Picqer\Financials\Exact\DocumentAttachment(new Connection());
        $documentAttachment->Url = 'http://www.example.org/index.html?id=123';

        $this->assertSame('http://www.example.org/index.html?id=123&Download=1', $documentAttachment->getDownloadUrl());
    }

    public function testDocumentCategorieEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentCategorie::class);
    }

    public function testDocumentCategoryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentCategory::class);
    }

    public function testDocumentFolderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentFolder::class);
    }

    public function testDocumentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Document::class);
    }

    public function testDocumentsAttachmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentsAttachment::class);
    }

    public function testDocumentTypeCategoryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentTypeCategory::class);
    }

    public function testDocumentTypeFolderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentTypeFolder::class);
    }

    public function testDocumentTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentType::class);
    }

    public function testEmployeeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Employee::class);
    }

    public function testEmploymentContractFlexPhaseEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\EmploymentContractFlexPhase::class);
    }

    public function testEmploymentContractEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\EmploymentContract::class);
    }

    public function testEmploymentEndReasonEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\EmploymentEndReason::class);
    }

    public function testEmploymentInternalRateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\EmploymentInternalRate::class);
    }

    public function testEmploymentOrganizationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\EmploymentOrganization::class);
    }

    public function testEmploymentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Employment::class);
    }

    public function testEmploymentSalaryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\EmploymentSalary::class);
    }

    public function testExchangeRateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ExchangeRate::class);
    }

    public function testFinancialPeriodEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\FinancialPeriod::class);
    }

    public function testGeneralJournalEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GeneralJournalEntryLine::class);
    }

    public function testGeneralJournalEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GeneralJournalEntry::class);
    }

    public function testGetMostRecentlyUsedDivisionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GetMostRecentlyUsedDivision::class);
    }

    public function testGLAccountClassificationMappingEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GLAccountClassificationMapping::class);
    }

    public function testGLAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GLAccount::class);
    }

    public function testGLClassificationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GLClassification::class);
    }

    public function testGLSchemeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GLScheme::class);
    }

    public function testGLTransactionSourceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GLTransactionSource::class);
    }

    public function testGLTransactionTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GLTransactionType::class);
    }

    public function testGoodsDeliveryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GoodsDeliveryLine::class);
    }

    public function testGoodsDeliveryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GoodsDelivery::class);
    }

    public function testGoodsReceiptLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GoodsReceiptLine::class);
    }

    public function testGoodsReceiptEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GoodsReceipt::class);
    }

    public function testHostingOpportunityEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HostingOpportunity::class);
    }

    public function testHourCostTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourCostType::class);
    }

    public function testHourEntryActivitiesByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourEntryActivitiesByProject::class);
    }

    public function testHourEntryRecentAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourEntryRecentAccount::class);
    }

    public function testHourEntryRecentAccountsByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourEntryRecentAccountsByProject::class);
    }

    public function testHourEntryRecentActivitiesByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourEntryRecentActivitiesByProject::class);
    }

    public function testHourEntryRecentHourTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourEntryRecentHourType::class);
    }

    public function testHourEntryRecentHourTypesByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourEntryRecentHourTypesByProject::class);
    }

    public function testHourEntryRecentProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourEntryRecentProject::class);
    }

    public function testHoursByDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HoursByDate::class);
    }

    public function testHoursByIdEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HoursById::class);
    }

    public function testHourTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourType::class);
    }

    public function testHourTypesByDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourTypesByDate::class);
    }

    public function testHourTypesByProjectAndDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\HourTypesByProjectAndDate::class);
    }

    public function testImportNotificationDetailEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ImportNotificationDetail::class);
    }

    public function testImportNotificationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ImportNotification::class);
    }

    public function testInvoiceSalesOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\InvoiceSalesOrder::class);
    }

    public function testInvoiceSalesOrdersEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\InvoiceSalesOrder::class);
    }

    public function testInvoiceTermEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\InvoiceTerm::class);
    }

    public function testInvolvedUserEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\InvolvedUser::class);
    }

    public function testInvolvedUserRoleEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\InvolvedUserRole::class);
    }

    public function testItemAssortmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemAssortment::class);
    }

    public function testItemAssortmentPropertyEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemAssortmentProperty::class);
    }

    public function testItemDetailsByIDEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemDetailsByID::class);
    }

    public function testItemExtraFieldEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemExtraField::class);
    }

    public function testItemGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemGroup::class);
    }

    public function testItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Item::class);
        $item = new \Picqer\Financials\Exact\Item(new Connection());
        $item->PictureUrl = 'http://www.example.org/index.html?id=123';

        $this->assertSame('http://www.example.org/index.html?id=123', $item->getDownloadUrl());
    }

    public function testItemVersionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemVersion::class);
    }

    public function testItemWarehouseEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemWarehouse::class);
    }

    public function testItemWarehousePlanningDetailEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemWarehousePlanningDetail::class);
    }

    public function testItemWarehousePlanningDetailsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemWarehousePlanningDetails::class);
    }

    public function testItemWarehouseStorageLocationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemWarehouseStorageLocation::class);
    }

    public function testJobGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\JobGroup::class);
    }

    public function testJobTitleEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\JobTitle::class);
    }

    public function testJournalEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Journal::class);
    }

    public function testJournalStatusByFinancialPeriodEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\JournalStatusByFinancialPeriod::class);
    }

    public function testJournalStatusListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\JournalStatusList::class);
    }

    public function testLayoutEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Layout::class);
    }

    public function testLeaveBuildUpRegistrationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\LeaveBuildUpRegistration::class);
    }

    public function testLeaveRegistrationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\LeaveRegistration::class);
    }

    public function testMailboxEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Mailbox::class);
    }

    public function testMailMessageAttachmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\MailMessageAttachment::class);
    }

    public function testMailMessageEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\MailMessage::class);
    }

    public function testMailMessagesSentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\MailMessagesSent::class);
    }

    public function testManufacturingSettingEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ManufacturingSetting::class);
    }

    public function testMaterialIssueEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\MaterialIssue::class);
    }

    public function testMaterialReversalEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\MaterialReversal::class);
    }

    public function testMeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Me::class);
    }

    public function testOfficialReturnEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\OfficialReturn::class);
    }

    public function testOperationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Operation::class);
    }

    public function testOperationResourceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\OperationResource::class);
    }

    public function testOpportunityContactEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\OpportunityContact::class);
    }

    public function testOpportunityDocumentsCountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\OpportunityDocumentsCount::class);
    }

    public function testOpportunityDocumentsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\OpportunityDocuments::class);
    }

    public function testOpportunityEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Opportunity::class);
    }

    public function testOutstandingInvoicesOverviewEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\OutstandingInvoicesOverview::class);
    }

    public function testPayablesListByAccountAndAgeGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PayablesListByAccountAndAgeGroup::class);
    }

    public function testPayablesListByAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PayablesListByAccount::class);
    }

    public function testPayablesListByAgeGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PayablesListByAgeGroup::class);
    }

    public function testPayablesListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PayablesList::class);
    }

    public function testPaymentConditionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PaymentCondition::class);
    }

    public function testPaymentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Payment::class);
    }

    public function testPlannedSalesReturnLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PlannedSalesReturnLine::class);
    }

    public function testPreferredMailboxForOperationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PreferredMailboxForOperation::class);
    }

    public function testPreferredMailboxEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PreferredMailbox::class);
    }

    public function testPriceListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PriceList::class);
    }

    public function testPrintedSalesInvoiceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PrintedSalesInvoice::class);
    }

    public function testPrintedSalesOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PrintedSalesOrder::class);
    }

    public function testPrintQuotationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PrintQuotation::class);
    }

    public function testCurrentYearProcessedEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CurrentYearProcessed::class);
    }

    public function testPreviousYearProcessedEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PreviousYearProcessed::class);
    }

    public function testProcessPaymentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProcessPayment::class);
    }

    public function testProcessStockCountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProcessStockCount::class);
    }

    public function testProcessWarehouseTransferEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProcessWarehouseTransfer::class);
    }

    public function testProductionAreaEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProductionArea::class);
    }

    public function testProfitLossOverviewEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProfitLossOverview::class);
    }

    public function testProjectBudgetTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectBudgetType::class);
    }

    public function testProjectHourBudgetEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectHourBudget::class);
    }

    public function testProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Project::class);
    }

    public function testProjectPlanningEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectPlanning::class);
    }

    public function testProjectPlanningRecurringEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectPlanningRecurring::class);
    }

    public function testProjectRestrictionEmployeeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectRestrictionEmployee::class);
    }

    public function testProjectRestrictionItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectRestrictionItem::class);
    }

    public function testProjectRestrictionRebillingEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectRestrictionRebilling::class);
    }

    public function testProjectWBSByProjectAndWBSEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectWBSByProjectAndWBS::class);
    }

    public function testProjectWBSByProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectWBSByProject::class);
    }

    public function testPurchaseEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseEntryLine::class);
    }

    public function testPurchaseEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseEntry::class);
    }

    public function testPurchaseInvoiceLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseInvoiceLine::class);
    }

    public function testPurchaseInvoiceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseInvoice::class);
    }

    public function testPurchaseOrderLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseOrderLine::class);
    }

    public function testPurchaseOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseOrder::class);
    }

    public function testQuotationLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\QuotationLine::class);
    }

    public function testQuotationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Quotation::class);
    }

    public function testReasonCodeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReasonCode::class);
    }

    public function testReceivablesListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReceivablesList::class);
    }

    public function testReceivableEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Receivable::class);
    }

    public function testReceivablesListByAccountAndAgeGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReceivablesListByAccountAndAgeGroup::class);
    }

    public function testReceivablesListByAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReceivablesListByAccount::class);
    }

    public function testReceivablesListByAgeGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReceivablesListByAgeGroup::class);
    }

    public function testRecentCostEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RecentCost::class);
    }

    public function testRecentCostsByNumberOfWeeksEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RecentCostsByNumberOfWeeks::class);
    }

    public function testRecentHourEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RecentHour::class);
    }

    public function testRecentTimeTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RecentTimeTransaction::class);
    }

    public function testRejectQuotationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RejectQuotation::class);
    }

    public function testReopenQuotationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReopenQuotation::class);
    }

    public function testReportingBalanceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReportingBalance::class);
    }

    public function testReturnsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Returns::class);
    }

    public function testRevenueListByYearAndStatusEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RevenueListByYearAndStatus::class);
    }

    public function testRevenueListByYearEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RevenueListByYear::class);
    }

    public function testRevenueListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RevenueList::class);
    }

    public function testReviewQuotationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReviewQuotation::class);
    }

    public function testSalesEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesEntryLine::class);
    }

    public function testSalesEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesEntry::class);
    }

    public function testSalesInvoiceLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesInvoiceLine::class);
    }

    public function testSalesInvoiceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesInvoice::class);
    }

    public function testSalesItemPriceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesItemPrice::class);
    }

    public function testSalesOrderIDEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesOrderID::class);
    }

    public function testSalesOrderLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesOrderLine::class);
    }

    public function testSalesOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesOrder::class);
    }

    public function testSalesPriceListDetailEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesPriceListDetail::class);
    }

    public function testSalesShippingMethodsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesShippingMethods::class);
    }

    public function testScheduleEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Schedule::class);
    }

    public function testSerialNumberEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SerialNumber::class);
    }

    public function testShippingMethodEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShippingMethod::class);
    }

    public function testShopOrderMaterialPlanDetailEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderMaterialPlanDetail::class);
    }

    public function testShopOrderMaterialPlanEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderMaterialPlan::class);
    }

    public function testShopOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrder::class);
    }

    public function testShopOrderPriorityEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderPriority::class);
    }

    public function testShopOrderReceiptEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderReceipt::class);
    }

    public function testShopOrderReversalEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderReversal::class);
    }

    public function testShopOrderRoutingStepPlanEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderRoutingStepPlan::class);
    }

    public function testShopOrderRoutingStepPlansAvailableToWorkEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderRoutingStepPlansAvailableToWork::class);
    }

    public function testSolutionLinkEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SolutionLink::class);
    }

    public function testTaskEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Task::class);
    }

    public function testStageForDeliveryReceiptEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StageForDeliveryReceipt::class);
    }

    public function testStageForDeliveryReversalEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StageForDeliveryReversal::class);
    }

    public function testStartedTimedTimeTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StartedTimedTimeTransaction::class);
    }

    public function testStockBatchNumberEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockBatchNumber::class);
    }

    public function testStockCountLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockCountLine::class);
    }

    public function testStockCountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockCount::class);
    }

    public function testStockPositionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockPosition::class);
    }

    public function testStockSerialNumberEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockSerialNumber::class);
    }

    public function testStorageLocationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StorageLocation::class);
    }

    public function testSubOrderReversalEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SubOrderReversal::class);
    }

    public function testSubscriptionLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SubscriptionLine::class);
    }

    public function testSubscriptionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Subscription::class);
    }

    public function testSubscriptionReasonCodeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SubscriptionReasonCode::class);
    }

    public function testSubscriptionRestrictionEmployeeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SubscriptionRestrictionEmployee::class);
    }

    public function testSubscriptionRestrictionItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SubscriptionRestrictionItem::class);
    }

    public function testSubscriptionsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Subscription::class);
    }

    public function testSubscriptionTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SubscriptionType::class);
    }

    public function testSupplierItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SupplierItem::class);
    }

    public function testSystemDivisionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SystemDivision::class);
    }

    public function testTaskTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TaskType::class);
    }

    public function testTaxEmploymentEndFlexCodeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TaxEmploymentEndFlexCode::class);
    }

    public function testTimeAndBillingAccountDetailEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingAccountDetail::class);
    }

    public function testTimeAndBillingAccountDetailsByIDEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingAccountDetailsByID::class);
    }

    public function testTimeAndBillingActivitiesAndExpenseEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingActivitiesAndExpense::class);
    }

    public function testTimeAndBillingEntryAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryAccount::class);
    }

    public function testTimeAndBillingEntryAccountsByDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryAccountsByDate::class);
    }

    public function testTimeAndBillingEntryAccountsByProjectAndDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryAccountsByProjectAndDate::class);
    }

    public function testTimeAndBillingEntryProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryProject::class);
    }

    public function testTimeAndBillingEntryProjectsByAccountAndDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryProjectsByAccountAndDate::class);
    }

    public function testTimeAndBillingEntryProjectsByDateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryProjectsByDate::class);
    }

    public function testTimeAndBillingEntryRecentAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryRecentAccount::class);
    }

    public function testTimeAndBillingEntryRecentActivitiesAndExpenseEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryRecentActivitiesAndExpense::class);
    }

    public function testTimeAndBillingEntryRecentHourCostTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryRecentHourCostType::class);
    }

    public function testTimeAndBillingEntryRecentProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingEntryRecentProject::class);
    }

    public function testTimeAndBillingItemDetailEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingItemDetail::class);
    }

    public function testTimeAndBillingItemDetailsByIDEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingItemDetailsByID::class);
    }

    public function testTimeAndBillingProjectDetailEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingProjectDetail::class);
    }

    public function testTimeAndBillingProjectDetailsByIDEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingProjectDetailsByID::class);
    }

    public function testTimeAndBillingRecentProjectEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeAndBillingRecentProject::class);
    }

    public function testTimeCorrectionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeCorrection::class);
    }

    public function testTimedTimeTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimedTimeTransaction::class);
    }

    public function testTimeTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeTransaction::class);
    }

    public function testTransactionLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TransactionLine::class);
    }

    public function testTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Transaction::class);
    }

    public function testUnitEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Unit::class);
    }

    public function testUnitsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Units::class);
    }

    public function testUserHasRightsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\UserHasRights::class);
    }

    public function testUserEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\User::class);
    }

    public function testUserRoleEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\UserRole::class);
    }

    public function testUserRolesPerDivisionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\UserRolesPerDivision::class);
    }

    public function testVatCodeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\VatCode::class);
    }

    public function testVatPercentageEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\VatPercentage::class);
    }

    public function testWarehouseEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Warehouse::class);
    }

    public function testWarehouseTransferLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\WarehouseTransferLine::class);
    }

    public function testWarehouseTransferEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\WarehouseTransfer::class);
    }

    public function testWebhookSubscriptionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\WebhookSubscription::class);
    }

    public function testWorkcenterEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Workcenter::class);
    }

    protected function performEntityTest($entityName)
    {
        $reflectionClass = new \ReflectionClass($entityName);

        $this->assertTrue($reflectionClass->isInstantiable());
        $this->assertTrue($reflectionClass->hasProperty('fillable'));
        $this->assertTrue($reflectionClass->hasProperty('url'));
        $this->assertEquals('Picqer\Financials\Exact', $reflectionClass->getNamespaceName());
        $this->assertTrue($reflectionClass->isSubclassOf('Picqer\Financials\Exact\Model'));
    }
}
