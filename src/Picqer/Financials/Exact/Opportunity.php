<?php namespace Picqer\Financials\Exact;

/**
 * Class Opportunity
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMOpportunities
 * 
 * @property Guid $ID Primary key
 * @property Guid $Account Lead to which the opportunity applies
 * @property String $AccountCode Code of Account
 * @property String $AccountName Name of Account
 * @property DateTime $ActionDate Indicates the date before/on the NextAction is supposed to be done
 * @property Double $AmountDC Amount in the default currency of the company. AmountDC = AmountFC * RateFC
 * @property Double $AmountFC Amount in the currency of the transaction
 * @property Guid $Campaign Reference to the campaign opportunity is related to
 * @property String $CampaignDescription Description of Campaign
 * @property DateTime $CloseDate The date when the opportunity is expected to be closed
 * @property DateTime $Created Creation date
 * @property Guid $Creator User ID of creator
 * @property String $CreatorFullName Name of the creator
 * @property String $Currency Currency code
 * @property Int32 $Division Division code
 * @property Guid $LeadSource The source of the lead/opportunity
 * @property String $LeadSourceDescription Description of LeadSource
 * @property DateTime $Modified Last modified date
 * @property Guid $Modifier User ID of modifier
 * @property String $ModifierFullName Name of the last modifier
 * @property String $Name Name of the opportunity
 * @property String $NextAction Indicates what follow up action is to be undertaken to move the opportunity towards a deal. Is used in combination with ActionDate
 * @property String $Notes Notes of the opportunity
 * @property Guid $OpportunityStage The stage of the opportunity. This is a list defined by the user
 * @property String $OpportunityStageDescription Description of OpportunityStage
 * @property Int32 $OpportunityStatus Status: 1=Open, 2=Closed won, 3=Closed lost
 * @property Guid $Owner The resource who owns the opportunity and is responsible to close the opportunity (either won or lost)
 * @property String $OwnerFullName Name of Owner
 * @property Double $Probability The chance that the opportunity will be closed and won. The default for the probability depends on the default from the opportunity stage
 * @property Guid $Project Reference to project
 * @property String $ProjectCode Code of Project
 * @property String $ProjectDescription Description of Project
 * @property Double $RateFC Exchange rate from original to division currency
 * @property Guid $ReasonCode Indicates the reason why the opportunity was lost.
 * @property String $ReasonCodeDescription Description of ReasonCode
 * @property Guid $SalesType Reference to Sales type
 * @property String $SalesTypeDescription Description of SalesType
 */
class Opportunity extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Account',
        'AccountCode',
        'AccountName',
        'ActionDate',
        'AmountDC',
        'AmountFC',
        'Campaign',
        'CampaignDescription',
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
        'OpportunityStage',
        'OpportunityStageDescription',
        'OpportunityStatus',
        'Owner',
        'OwnerFullName',
        'Probability',
        'Project',
        'ProjectCode',
        'ProjectDescription',
        'RateFC',
        'ReasonCode',
        'ReasonCodeDescription',
        'SalesType',
        'SalesTypeDescription'
    ];

    protected $url = 'crm/Opportunities';

}
