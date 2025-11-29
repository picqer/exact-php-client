<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncBankAccount.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SyncPayrollBankAccounts
 *
 * @property int $Timestamp Timestamp
 * @property string $BankAccountHolderName The bank account holder name. (maximum of 50 characters)
 * @property string $BICCode BIC code of the bank where the bank account is held. (maximum of 11 characters)
 * @property string $Created Creation date
 * @property string $Creator User ID of creator
 * @property string $CreatorFullName Name of creator
 * @property string $Description The description of the bank account. (maximum of 60 characters)
 * @property string $Employee This is the employee id to which the bank account belongs to.
 * @property string $EmployeeFullName Name of employee
 * @property int $EmployeeHID Numeric number of Employee
 * @property string $ID Primary key
 * @property bool $Main This indicates if the bank account is the main bank account
 * @property string $Modified Last modified date
 * @property string $Modifier User ID of modifier
 * @property string $ModifierFullName Name of modifier
 * @property string $Number This is the bank account number. (maximum of 34 characters)
 */
class SyncBankAccount extends Model
{
    /** @use Query\Findable<self> */
    use Query\Findable;

    protected $primaryKey = 'Timestamp';

    protected $fillable = [
        'Timestamp',
        'BankAccountHolderName',
        'BICCode',
        'Created',
        'Creator',
        'CreatorFullName',
        'Description',
        'Employee',
        'EmployeeFullName',
        'EmployeeHID',
        'ID',
        'Main',
        'Modified',
        'Modifier',
        'ModifierFullName',
        'Number',
    ];

    protected $url = 'sync/Payroll/BankAccounts';
}
