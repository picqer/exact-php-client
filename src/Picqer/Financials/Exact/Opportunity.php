<?php

namespace Picqer\Financials\Exact;

/**
 * Class Opportunity.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMOpportunities
 *
 * @property string $ID Primary key
 * @property string $Account Lead to which the opportunity applies
 * @property string $Accountant Accountant linked to the opportunity
 * @property string $AccountantCode Code of the Accountant
 * @property string $AccountantName Name of the Accountant
 * @property string $AccountCode Code of Account
 * @property string $AccountName Name of Account
 * @property string $ActionDate Indicates the date before/on the NextAction is supposed to be done
 * @property float $AmountDC Amount in the default currency of the company. AmountDC = AmountFC * RateFC
 * @property float $AmountFC Amount in the currency of the transaction
 * @property string $Campaign Reference to the campaign opportunity is related to
 * @property string $CampaignDescription Description of Campaign
 * @property int $Channel Reference to the channel opportunity is related to
 * @property string $ChannelDescription Description of Channel
 * @property string $CloseDate The date when the opportunity is expected to be closed
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of the creator
 * @property string $Currency Currency code
 * @property int $Division Division code
 * @property string $LeadSource The source of the lead/opportunity
 * @property string $LeadSourceDescription Description of LeadSource
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of the last modifier
 * @property string $Name Name of the opportunity
 * @property string $NextAction Indicates what follow up action is to be undertaken to move the opportunity towards a deal. Is used in combination with ActionDate
 * @property string $Notes Notes of the opportunity
 * @property int $OpportunityDepartmentCode Code of Opportunity Department
 * @property string $OpportunityDepartmentDescription Description of Opportunity Department
 * @property string $OpportunityStage The stage of the opportunity. This is a list defined by the user
 * @property string $OpportunityStageDescription Description of OpportunityStage
 * @property int $OpportunityStatus Status: 1=Open, 2=Closed won, 3=Closed lost
 * @property int $OpportunityType Code of Opportunity Type
 * @property string $OpportunityTypeDescription Description of Opportunity Type
 * @property string $Owner The resource who owns the opportunity and is responsible to close the opportunity (either won or lost)
 * @property string $OwnerFullName Name of Owner
 * @property float $Probability The chance that the opportunity will be closed and won. The default for the probability depends on the default from the opportunity stage
 * @property string $Project Reference to project
 * @property string $ProjectCode Code of Project
 * @property string $ProjectDescription Description of Project
 * @property float $RateFC Exchange rate from original to division currency
 * @property string $ReasonCode Indicates the reason why the opportunity was lost.
 * @property string $ReasonCodeDescription Description of ReasonCode
 * @property string $Reseller Reseller linked to the opportunity
 * @property string $ResellerCode Code of the Reseller
 * @property string $ResellerName Name of the Reseller
 * @property string $SalesType Reference to Sales type
 * @property string $SalesTypeDescription Description of SalesType
 */
class Opportunity extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'Accountant',
        'AccountantCode',
        'AccountantName',
        'AccountCode',
        'AccountName',
        'ActionDate',
        'AmountDC',
        'AmountFC',
        'Campaign',
        'CampaignDescription',
        'Channel',
        'ChannelDescription',
        'CloseDate',
        'Created',
        'Creator',
        'CreatorFullName',
        'Currency',
        'Division',
        'LeadSource',
        'LeadSourceDescription',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Name',
        'NextAction',
        'Notes',
        'OpportunityDepartmentCode',
        'OpportunityDepartmentDescription',
        'OpportunityStage',
        'OpportunityStageDescription',
        'OpportunityStatus',
        'OpportunityType',
        'OpportunityTypeDescription',
        'Owner',
        'OwnerFullName',
        'Probability',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'RateFC',
        'ReasonCode',
        'ReasonCodeDescription',
        'Reseller',
        'ResellerCode',
        'ResellerName',
        'SalesType',
        'SalesTypeDescription',
    ];

    protected $url = 'crm/Opportunities';
}
