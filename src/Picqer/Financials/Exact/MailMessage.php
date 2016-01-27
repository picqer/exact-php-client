<?php namespace Picqer\Financials\Exact;

class MailMessage extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'Bank',
        'BankAccount',
        'ForDivision',
        'Operation',
        'OriginalMessage',
        'PartnerKey',
        'Quantit',
        'RecipientDelete',
        'RecipientMailboxID',
        'RecipientStatus',
        'SenderDateSent',
        'SenderDeleted',
        'SenderIPAddress',
        'SenderMailboxID',
        'Subject',
        'SynchronizationCode',
        'Type'
    ];

    protected $url = 'mailbox/MailMessages';

}
