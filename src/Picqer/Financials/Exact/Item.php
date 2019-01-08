<?php

namespace Picqer\Financials\Exact;

/**
 * Class Item
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=logisticsItems
 *
 * @property string $Barcode Barcode of the item (numeric string)
 * @property string $ID Primary key
 * @property string $Class_01 Item class code referring to ItemClasses with ClassID 1
 * @property string $Class_02 Item class code referring to ItemClasses with ClassID 2
 * @property string $Class_03 Item class code referring to ItemClasses with ClassID 3
 * @property string $Class_04 Item class code referring to ItemClasses with ClassID 4
 * @property string $Class_05 Item class code referring to ItemClasses with ClassID 5
 * @property string $Class_06 Item class code referring to ItemClasses with ClassID 6
 * @property string $Class_07 Item class code referring to ItemClasses with ClassID 7
 * @property string $Class_08 Item class code referring to ItemClasses with ClassID 8
 * @property string $Class_09 Item class code referring to ItemClasses with ClassID 9
 * @property string $Class_10 Item class code referring to ItemClasses with ClassID 10
 * @property string $Code Item code
 * @property int $CopyRemarks Copy remarks to sales lines
 * @property string $CostPriceCurrency The currency of the current and proposed cost price
 * @property float $CostPriceNew Proposed cost price
 * @property float $CostPriceStandard The current standard cost price
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description Description of the item
 * @property int $Division Division code
 * @property string $EndDate Together with StartDate this determines if the item is active
 * @property string $ExtraDescription Extra description text, slightly longer than the regular description (255 instead of 60)
 * @property bool $FreeBoolField_01 Free boolean field 1
 * @property bool $FreeBoolField_02 Free boolean field 2
 * @property bool $FreeBoolField_03 Free boolean field 3
 * @property bool $FreeBoolField_04 Free boolean field 4
 * @property bool $FreeBoolField_05 Free boolean field 5
 * @property string $FreeDateField_01 Free date field 1
 * @property string $FreeDateField_02 Free date field 2
 * @property string $FreeDateField_03 Free date field 3
 * @property string $FreeDateField_04 Free date field 4
 * @property string $FreeDateField_05 Free date field 5
 * @property float $FreeNumberField_01 Free numeric field 1
 * @property float $FreeNumberField_02 Free numeric field 2
 * @property float $FreeNumberField_03 Free numeric field 3
 * @property float $FreeNumberField_04 Free numeric field 4
 * @property float $FreeNumberField_05 Free numeric field 5
 * @property float $FreeNumberField_06 Free numeric field 6
 * @property float $FreeNumberField_07 Free numeric field 7
 * @property float $FreeNumberField_08 Free numeric field 8
 * @property string $FreeTextField_01 Free text field 1
 * @property string $FreeTextField_02 Free text field 2
 * @property string $FreeTextField_03 Free text field 3
 * @property string $FreeTextField_04 Free text field 4
 * @property string $FreeTextField_05 Free text field 5
 * @property string $FreeTextField_06 Free text field 6
 * @property string $FreeTextField_07 Free text field 7
 * @property string $FreeTextField_08 Free text field 8
 * @property string $FreeTextField_09 Free text field 9
 * @property string $FreeTextField_10 Free text field 10
 * @property string $GLCosts GL account the cost entries will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property string $GLCostsCode Code of GL account for costs
 * @property string $GLCostsDescription Description of GLCosts
 * @property string $GLRevenue GL account the revenue will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property string $GLRevenueCode Code of GLRevenue
 * @property string $GLRevenueDescription Description of GLRevenue
 * @property string $GLStock GL account the stock entries will be booked on. This overrules the GL account from the item group. If the license contains 'Intuit integration' this property overrides the value in Settings, not the item group.
 * @property string $GLStockCode Code of GL account for stock
 * @property string $GLStockDescription Description of GLStock
 * @property int $IsBatchItem Indicates if batches are used for this item
 * @property int $IsBatchNumberItem Used with Batch number feature. Indicates if the item can have a batch number
 * @property bool $IsFractionAllowedItem Indicates if fractions (for example 0.35) are allowed for quantities of this item
 * @property int $IsMakeItem Indicates that an Item is produced to Inventory, not purchased
 * @property int $IsNewContract Only used for packages (IsPackageItem=1). To indicate if this package is a new contract type package
 * @property int $IsOnDemandItem Is On demand Item
 * @property int $IsPackageItem Only used for packages (IsPackageItem=1). To indicate if this package is a new contract type package
 * @property bool $IsPurchaseItem Indicates if the item can be purchased
 * @property int $IsRegistrationCodeItem Indicated if the item is used in voucher functionality
 * @property bool $IsSalesItem Indicates if the item can be sold
 * @property bool $IsSerialItem Indicates that serial numbers are used for this item
 * @property bool $IsStockItem If you have the Trade or Manufacturing license and you check this property the item will be shown in the stock positions overview, stock counts and transaction lists. If you have the Invoice module and you check this property you will get a general journal entry based on the Stock and Costs G/L accounts of the item group. If you don’t want the general journal entry to be created you should change the Stock/Costs G/L account on the Item group page to the type Costs instead of Inventory.
 * @property bool $IsSubcontractedItem Indicates if the item is provided by an outside supplier
 * @property int $IsTime Indicates if the item is a time unit item (for example a labor hour item)
 * @property int $IsWebshopItem Indicates if the item can be exported to a web shop
 * @property string $ItemGroup GUID of Item group of the item
 * @property string $ItemGroupCode Code of ItemGroup
 * @property string $ItemGroupDescription Description of ItemGroup
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Notes Notes
 * @property string $SalesVatCode Code of SalesVat
 * @property string $SalesVatCodeDescription Description of SalesVatCode
 * @property string $SearchCode Search code of the item
 * @property int $SecurityLevel Security level (0 - 100)
 * @property string $StartDate Together with StartDate this determines if the item is active
 * @property int $Unit Indicates if the item is a time unit item (for example a labor hour item)
 * @property string $UnitDescription Description of Unit
 * @property string $PictureUrl
 * @property string $PictureThumbnailUrl
 * @property string $PictureName
 */
class Item extends Model
{
    use Query\Findable;
    use Persistance\Storable;
    use Persistance\Downloadable;
        
    protected $fillable = [
        'Barcode',
        'ID',
        'Class_01',
        'Class_02',
        'Class_03',
        'Class_04',
        'Class_05',
        'Class_06',
        'Class_07',
        'Class_08',
        'Class_09',
        'Class_10',
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
        'PictureUrl',
        'PictureThumbnailUrl',
        'PictureName',
    ];

    protected $url = 'logistics/Items';

    /**
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->PictureUrl;
    }
}
