<?php

namespace Picqer\Financials\Exact;

/**
 * Class OfficialReturn.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialOfficialReturns
 *
 * @property string $ID Primary key
 * @property float $Amount Total liquidation amount of the official return
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName CreatorFullName
 * @property string $Description Description of the official return
 * @property int $Division Division code
 * @property string $Document Document linked to the official return.
 * @property string $DocumentSubject DocumentSubject
 * @property int $Frequency Frequency Monthly = 10,	TwoMonthly = 20, Quarterly = 30, Yearly = 40,FinancialYearQuarter = 100
 * @property int $IsCorrection IsCorrection
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property int $Period Financial period (for annual returns = 0)
 * @property string $PresentationData Registration data of the presenting proof document, JSON serialized dictionary
 * Spanish legislation Keys:
 * registrationEntryNumberRegistration entry number
 * safeCodeVerificationTax authorities CSV
 * vatPresenterVAT number of the presenter
 * surnameNameCompanyNameName of the presenter
 * capacityOfCOLABORADOR
 * receiptNumberReceipt number
 * @property string $PresentationDate Presentation date of the official return to the tax authorities
 * @property binary $PresentationFile For performance reasons presentation attachment is Write-Only.
 * @property string $PresentationFileName File name of presentation attachment.
 * @property string $Reference Reference of the official return
 * @property int $Source Source of the official return : 1 - EOL, 2 - RestAPI
 * @property int $Status Status of the official return
 * @property int $Type Type of the official return
 * @property string $TypeDescription Official return type description
 * @property int $Year Financial year of the official return
 */
class OfficialReturn extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Amount',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Division',
        'Document',
        'DocumentSubject',
        'Frequency',
        'IsCorrection',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Period',
        'PresentationData',
        'PresentationDate',
        'PresentationFile',
        'PresentationFileName',
        'Reference',
        'Source',
        'Status',
        'Type',
        'TypeDescription',
        'Year',
    ];

    protected $url = 'financial/OfficialReturns';
}
