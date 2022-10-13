<?php

namespace Picqer\Financials\Exact;

/**
 * Class WBSDeliverable.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ProjectWBSDeliverables
 *
 * @property string $ID Primary key
 * @property bool $Completed To indicated if the WBS deliverable is completed. WBS deliverable can only be set to completed when an invoice term is linked
 * @property string $Created The date and time when the WBS deliverable was created
 * @property string $Creator The ID of the user that created the WBS deliverable
 * @property string $CreatorFullName The full name of the user that created the WBS deliverable
 * @property string $CustomField Custom field endpoint. Provided only for the Exact Online Premium users.
 * @property string $Description Description of the WBS deliverable
 * @property int $Division Division code
 * @property bool $Milestone To indicated if this is a milestone
 * @property string $Modified The date when the WBS deliverable was modified
 * @property string $Modifier The ID of the user that modified the WBS deliverable
 * @property string $ModifierFullName The full name of the user that modified the WBS deliverable
 * @property string $Notes For additional information
 * @property string $PartOf ID of the WBS deliverable part of
 * @property string $PartOfDescription Description of part of
 * @property string $Project ID of the project that linked to WBS deliverable
 * @property string $ProjectDescription Project description that is linked to WBS deliverable
 * @property string $ProjectTerm ID of invoice term that linked to the WBS deliverable. Invoice term can only be linked when the project is using billing milestones and the deliverable is set as a milestone
 * @property string $ProjectTermDescription Description of invoice term that linked to the WBS deliverable
 * @property bool $ReleaseInvoiceTerm Action to release the invoice term. You can only release a WBS deliverable's invoice term once and it cannot be undo
 * @property string $ReleaseInvoiceTermDate Release invoice term date. The linked invoice term date can be updated by using this property. The update will only happen when releasing a WBS deliverable's invoice term
 * @property int $SequenceNumber Sequence number of the WBS deliverable. Last sequence will be selected if not specified
 */
class WBSDeliverable extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Completed',
        'Created',
        'Creator',
        'CreatorFullName',
        'CustomField',
        'Description',
        'Division',
        'Milestone',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Notes',
        'PartOf',
        'PartOfDescription',
        'Project',
        'ProjectDescription',
        'ProjectTerm',
        'ProjectTermDescription',
        'ReleaseInvoiceTerm',
        'ReleaseInvoiceTermDate',
        'SequenceNumber',
    ];

    protected $url = 'project/WBSDeliverables';
}
