<?php

use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Connection;

/**
 * Class EntityTest
 *
 * Tests all entities to ensure entities have no PHP parse errors and have
 * at least the properties we need to use the entity
 */
class EntityTest extends TestCase
{

    public function testAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Account::class);
    }

    public function testAccountClassificationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountClassification::class);
    }

    public function testAccountInvolvedAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountInvolvedAccount::class);
    }

    public function testAccountItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountItem::class);
    }

    public function testAddressEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Address::class);
    }

    public function testBankAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BankAccount::class);
    }

    public function testBankEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Bank::class);
    }

    public function testBankEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BankEntry::class);
    }

    public function testBankEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BankEntryLine::class);
    }

    public function testBudgetEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Budget::class);
    }

    public function testCashEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CashEntry::class);
    }

    public function testCashEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CashEntryLine::class);
    }

    public function testContactEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Contact::class);
    }

    public function testCostcenterEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Costcenter::class);
    }

    public function testCostunitEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Costunit::class);
    }

    public function testDirectDebitMandateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DirectDebitMandate::class);
    }

    public function testDivisionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Division::class);
    }

    public function testSystemDivisionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SystemDivision::class);
    }

    public function testDocumentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Document::class);
    }

    public function testDocumentAttachmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentAttachment::class);
        $documentAttachment = new \Picqer\Financials\Exact\DocumentAttachment(new Connection());
        $documentAttachment->Url = 'http://www.example.org/index.html?id=123';

        $this->assertSame('http://www.example.org/index.html?id=123&Download=1', $documentAttachment->getDownloadUrl());
    }

    public function testDocumentCategoryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentCategory::class);
    }

    public function testDocumentTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentType::class);
    }

    public function testEmployeeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Employee::class);
    }

    public function testExchangeRateEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ExchangeRate::class);
    }

    public function testGeneralJournalEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GeneralJournalEntry::class);
    }

    public function testGeneralJournalEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GeneralJournalEntryLine::class);
    }

    public function testGLAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GLAccount::class);
    }

    public function testGLTransactionTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GLTransactionType::class);
    }

    public function testInvoiceSalesOrdersEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\InvoiceSalesOrder::class);
    }

    public function testItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Item::class);
        $item = new \Picqer\Financials\Exact\Item(new Connection());
        $item->PictureUrl = 'http://www.example.org/index.html?id=123';

        $this->assertSame('http://www.example.org/index.html?id=123', $item->getDownloadUrl());
    }

    public function testItemExtraField()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemExtraField::class);
    }

    public function testItemGroupEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemGroup::class);
    }

    public function testItemWarehouseEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemWarehouse::class);
    }

    public function testJournalEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Journal::class);
    }

    public function testLayoutEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Layout::class);
    }

    public function testMailMessageEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\MailMessage::class);
    }

    public function testMailMessageAttachmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\MailMessageAttachment::class);
    }

    public function testMeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Me::class);
    }

    public function testOutstandingInvoicesOverviewEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\OutstandingInvoicesOverview::class);
    }

    public function testPayablesListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PayablesList::class);
    }

    public function testPaymentConditionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PaymentCondition::class);
    }

    public function testPrintedSalesInvoiceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PrintedSalesInvoice::class);
    }

    public function testProfitLossOverviewEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProfitLossOverview::class);
    }

    public function testPurchaseEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseEntry::class);
    }

    public function testPurchaseEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseEntryLine::class);
    }

    public function testPurchaseOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseOrder::class);
    }

    public function testPurchaseOrderLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\PurchaseOrderLine::class);
    }

    public function testQuotationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Quotation::class);
    }

    public function testQuotationLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\QuotationLine::class);
    }

    public function testReceivableListEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReceivableList::class);
    }

    public function testReportingBalanceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ReportingBalance::class);
    }

    public function testSalesEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesEntry::class);
    }

    public function testSalesEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesEntryLine::class);
    }

    public function testSalesInvoiceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesInvoice::class);
    }

    public function testSalesInvoiceLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesInvoiceLine::class);
    }

    public function testSalesItemPriceEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesItemPrice::class);
    }

    public function testSalesOrderEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesOrder::class);
    }

    public function testSalesOrderLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesOrderLine::class);
    }

    public function testStockPositionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockPosition::class);
    }

    public function testSubscriptionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Subscription::class);
    }

    public function testSubscriptionLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SubscriptionLine::class);
    }

    public function testSubscriptionTypeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SubscriptionType::class);
    }

    public function testTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Transaction::class);
    }

    public function testTransactionLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TransactionLine::class);
    }

    public function testUnitsEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Units::class);
    }

    public function testVatcodeEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\VatCode::class);
    }

    public function testWebhookSubscriptionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\WebhookSubscription::class);
    }

    public function testStockCountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockCount::class);
    }

    public function testStockCountLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockCountLine::class);
    }

    public function testWarehouseEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Warehouse::class);
    }

    public function testStorageLocationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StorageLocation::class);
    }

    public function testGoodsDeliveryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GoodsDelivery::class);
    }

    public function testGoodsDeliveryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\GoodsDeliveryLine::class);
    }

    public function testSalesOrderIDEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesOrderID::class);
    }

    public function testItemWarehousePlanningDetails()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ItemWarehousePlanningDetails::class);
    }

    public function testSalesShippingMethods()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\SalesShippingMethods::class);
    }

    public function testInvoiceTerm()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\InvoiceTerm::class);
    }

    public function testBillOfMaterialVersion()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BillOfMaterialVersion::class);
    }

    public function testBillOfMaterialMaterial()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BillOfMaterialMaterial::class);
    }

    public function testProject()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Project::class);
    }

    public function testProjectWBSByProject()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectWBSByProject::class);
    }

    public function testShopOrder()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrder::class);
    }

    public function testTimeTransactionEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeTransaction::class);
    }

    public function testUser()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\User::class);
    }

    public function testShopOrderMaterialPlan()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderMaterialPlan::class);
    }

    public function testShopOrderRoutingStepPlan()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ShopOrderRoutingStepPlan::class);
    }

    public function testOperation()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Operation::class);
    }

    public function testOperationResource()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\OperationResource::class);
    }

    public function testAbsenceRegistration()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AbsenceRegistration::class);
    }

    public function testAbsenceRegistrationTransaction()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AbsenceRegistrationTransaction::class);
    }

    public function testDepartment()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Department::class);
    }

    public function testDivisionClass()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DivisionClass::class);
    }

    public function testDivisionClassName()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DivisionClassName::class);
    }

    public function testDivisionClassValue()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DivisionClassValue::class);
    }

    public function testJobGroup()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\JobGroup::class);
    }

    public function testJobTitle()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\JobTitle::class);
    }

    public function testLeaveBuildUpRegistration()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\LeaveBuildUpRegistration::class);
    }

    public function testLeaveRegistration()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\LeaveRegistration::class);
    }

    public function testSchedule()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Schedule::class);
    }

    public function testStockBatchNumber()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockBatchNumber::class);
    }

    public function testStockSerialNumber()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\StockSerialNumber::class);
    }

    public function testWarehouseTransferLine()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\WarehouseTransferLine::class);
    }

    public function testWarehouseTransfer()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\WarehouseTransfer::class);
    }

    public function testProductionArea()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProductionArea::class);
    }

    public function testTimedTimeTransaction()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimedTimeTransaction::class);
    }

    public function testWorkcenter()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Workcenter::class);
    }

    public function testCostTransaction()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\CostTransaction::class);
    }

    public function testProjectHourBudget()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectHourBudget::class);
    }

    public function testProjectPlanning()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectPlanning::class);
    }

    public function testProjectPlanningRecurring()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectPlanningRecurring::class);
    }

    public function testProjectRestrictionEmployee()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectRestrictionEmployee::class);
    }

    public function testProjectRestrictionItem()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectRestrictionItem::class);
    }

    public function testProjectRestrictionRebilling()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ProjectRestrictionRebilling::class);
    }

    public function testRecentCost()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RecentCost::class);
    }

    public function testRecentHour()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\RecentHour::class);
    }

    public function testTimeCorrection()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\TimeCorrection::class);
    }

    public function testEmployment()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Employment::class);
    }

    public function testEmploymentContract()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\EmploymentContract::class);
    }

    public function testActiveEmployment()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\ActiveEmployment::class);
    }

    protected function performEntityTest($entityName)
    {
        $reflectionClass = new ReflectionClass($entityName);

        $this->assertTrue($reflectionClass->isInstantiable());
        $this->assertTrue($reflectionClass->hasProperty('fillable'));
        $this->assertTrue($reflectionClass->hasProperty('url'));
        $this->assertEquals('Picqer\Financials\Exact', $reflectionClass->getNamespaceName());
        $this->assertEquals('Picqer\Financials\Exact\Model', $reflectionClass->getParentClass()->getName());
    }

}
