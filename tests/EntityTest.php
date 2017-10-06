<?php

/**
 * Class EntityTest
 *
 * Tests all entities to ensure entities have no PHP parse errors and have
 * at least the properties we need to use the entity
 */
class EntityTest extends \PHPUnit_Framework_TestCase
{

    public function testAccountEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Account::class);
    }

    public function testAccountClassificationEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\AccountClassification::class);
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

    public function testBankEntryEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BankEntry::class);
    }

    public function testBankEntryLineEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\BankEntryLine::class);
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

    public function testDocumentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Document::class);
    }

    public function testDocumentAttachmentEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\DocumentAttachment::class);
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

    public function testInvoiceSalesOrdersEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\InvoiceSalesOrder::class);
    }

    public function testItemEntity()
    {
        $this->performEntityTest(\Picqer\Financials\Exact\Item::class);
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