<?php

namespace Picqer\Financials\Exact;

/**
 * Class Item
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=logisticsItems
 *
 * @property String $Barcode
 * @property Guid $ID Primary key
 * @property String $Class_01 Item class code referring to ItemClasses with ClassID 1
 * @property String $Class_02 Item class code referring to ItemClasses with ClassID 2
 * @property String $Class_03 Item class code referring to ItemClasses with ClassID 3
 * @property String $Class_04 Item class code referring to ItemClasses with ClassID 4
 * @property String $Class_05 Item class code referring to ItemClasses with ClassID 5
 * @property String $Code Barcode of the item (numeric string)
 * @property Byte $CopyRemarks Copy remarks to sales lines
 * @property String $CostPriceCurrency The currency of the current and proposed cost price
 * @property Double $CostPriceNew Proposed cost price
 * @property Double $CostPriceStandard The current standard cost price
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of creator
 * @property String $Description Description of the item
 * @property Int32 $Division Division code
 * @property DateTime $EndDate Together with StartDate this determines if the item is active
 * @property String $ExtraDescription Extra description text, slightly longer than the regular description (255 instead of 60)
 * @property Boolean $FreeBoolField_01 Free boolean field 1
 * @property Boolean $FreeBoolField_02 Free boolean field 2
 * @property Boolean $FreeBoolField_03 Free boolean field 3
 * @property Boolean $FreeBoolField_04 Free boolean field 4
 * @property Boolean $FreeBoolField_05 Free boolean field 5
 * @property DateTime $FreeDateField_01 Free date field 1
 * @property DateTime $FreeDateField_02 Free date field 2
 * @property DateTime $FreeDateField_03 Free date field 3
 * @property DateTime $FreeDateField_04 Free date field 4
 * @property DateTime $FreeDateField_05 Free date field 5
 * @property Double $FreeNumberField_01 Free numeric field 1
 * @property Double $FreeNumberField_02 Free numeric field 2
 * @property Double $FreeNumberField_03 Free numeric field 3
 * @property Double $FreeNumberField_04 Free numeric field 4
 * @property Double $FreeNumberField_05 Free numeric field 5
 * @property Double $FreeNumberField_06 Free numeric field 6
 * @property Double $FreeNumberField_07 Free numeric field 7
 * @property Double $FreeNumberField_08 Free numeric field 8
 * @property String $FreeTextField_01 Free text field 1
 * @property String $FreeTextField_02 Free text field 2
 * @property String $FreeTextField_03 Free text field 3
 * @property String $FreeTextField_04 Free text field 4
 * @property String $FreeTextField_05 Free text field 5
 * @property String $FreeTextField_06 Free text field 6
 * @property String $FreeTextField_07 Free text field 7
 * @property String $FreeTextField_08 Free text field 8
 * @property String $FreeTextField_09 Free text field 9
 * @property String $FreeTextField_10 Free text field 10
 * @property Guid $GLCosts GL account the cost entries will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property String $GLCostsCode Code of GL account for costs
 * @property String $GLCostsDescription Description of GLCosts
 * @property Guid $GLRevenue GL account the revenue will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property String $GLRevenueCode Code of GLRevenue
 * @property String $GLRevenueDescription Description of GLRevenue
 * @property Guid $GLStock GL account the stock entries will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property String $GLStockCode Code of GL account for stock
 * @property String $GLStockDescription Description of GLStock
 * @property Byte $IsBatchItem Indicates if batches are used for this item
 * @property Byte $IsBatchNumberItem Used with Batch number feature. Indicates if the item can have a batch number
 * @property Boolean $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property Byte $IsMakeItem Indicates that an Item is produced to Inventory, not purchased
 * @property Byte $IsNewContract Only used for packages (IsPackageItem=1). To indicate if this package is a new contract type package
 * @property Byte $IsOnDemandItem Is On demand Item
 * @property Byte $IsPackageItem Only used for packages (IsPackageItem=1). To indicate if this package is a new contract type package
 * @property Boolean $IsPurchaseItem Indicates if the item can be purchased
 * @property Byte $IsRegistrationCodeItem Indicated if the item is used in voucher functionality
 * @property Boolean $IsSalesItem Indicates if the item can be sold
 * @property Boolean $IsSerialItem Indicates that serial numbers are used for this item
 * @property Boolean $IsStockItem If you have the Trade or Manufacturing license and you check this property the item will be shown in the stock positions overview, stock counts and transaction lists. If you have the Invoice module and you check this property you will get a general journal entry based on the Stock and Costs G/L accounts of the item group. If you don’t want the general journal entry to be created you should change the Stock/Costs G/L account on the Item group page to the type Costs instead of Inventory.
 * @property Boolean $IsSubcontractedItem Indicates if the item is provided by an outside supplier
 * @property Byte $IsTime Indicates if the item is a time unit item (for example a labor hour item)
 * @property Byte $IsWebshopItem Indicates if the item can be exported to a web shop
 * @property Guid $ItemGroup GUID of Item group of the item
 * @property String $ItemGroupCode Code of ItemGroup
 * @property String $ItemGroupDescription Description of ItemGroup
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of modifier
 * @property String $Notes Notes
 * @property String $SalesVatCode Code of SalesVat
 * @property String $SalesVatCodeDescription Description of SalesVatCode
 * @property String $SearchCode Search code of the item
 * @property Int32 $SecurityLevel Security level (0 - 100)
 * @property DateTime $StartDate Together with StartDate this determines if the item is active
 * @property Byte $Unit Indicates if the item is a time unit item (for example a labor hour item)
 * @property String $UnitDescription Description of Unit
 */
class Item extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'Barcode',
        'ID',
        'Class_01',
        'Class_02',
        'Class_03',
        'Class_04',
        'Class_05',
        'Code',
        'CopyRemarks',
        'CostPriceCurrency',
        'CostPriceNew',
        'CostPriceStandard',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'EndDate',
        'ExtraDescription',
        'FreeBoolField_01',
        'FreeBoolField_02',
        'FreeBoolField_03',
        'FreeBoolField_04',
        'FreeBoolField_05',
        'FreeDateField_01',
        'FreeDateField_02',
        'FreeDateField_03',
        'FreeDateField_04',
        'FreeDateField_05',
        'FreeNumberField_01',
        'FreeNumberField_02',
        'FreeNumberField_03',
        'FreeNumberField_04',
        'FreeNumberField_05',
        'FreeNumberField_06',
        'FreeNumberField_07',
        'FreeNumberField_08',
        'FreeTextField_01',
        'FreeTextField_02',
        'FreeTextField_03',
        'FreeTextField_04',
        'FreeTextField_05',
        'FreeTextField_06',
        'FreeTextField_07',
        'FreeTextField_08',
        'FreeTextField_09',
        'FreeTextField_10',
        'GLCosts',
        'GLCostsCode',
        'GLCostsDescription',
        'GLRevenue',
        'GLRevenueCode',
        'GLRevenueDescription',
        'GLStock',
        'GLStockCode',
        'GLStockDescription',
        'IsBatchItem',
        'IsBatchNumberItem',
        'IsFractionAllowedItem',
        'IsMakeItem',
        'IsNewContract',
        'IsOnDemandItem',
        'IsPackageItem',
        'IsPurchaseItem',
        'IsRegistrationCodeItem',
        'IsSalesItem',
        'IsSerialItem',
        'IsStockItem',
        'IsSubcontractedItem',
        'IsTime',
        'IsWebshopItem',
        'ItemGroup',
        'ItemGroupCode',
        'ItemGroupDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'SalesVatCode',
        'SalesVatCodeDescription',
        'SearchCode',
        'SecurityLevel',
        'StartDate',
        'Stock',
        'Unit',
        'UnitDescription',
    ];

    protected $url = 'logistics/Items';
}
