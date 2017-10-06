<?php

namespace Picqer\Financials\Exact;

/**
 * Class Units
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsUnits
 *
 * @property Guid $ID Primary key
 * @property Boolean $Active Indicates whether a unit is in use
 * @property String $Code Unique code for the unit
 * @property String $Description Description
 * @property Int32 $Division Division code
 * @property Byte $Main	Indicates the main unit per division. Will be used when creating new item
 * @property String $TimeUnit If Type = 'T' (time) then this fields indicates the type of time frame. yy = Year, mm = Month, wk = Week, dd = Day, hh = Hour, mi = Minute, ss = Second
 * @property String $Type Type 'Time' is especially important for contracts.

 */
class Units extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ID',
        'Active',
        'Code',
        'Description',
        'Division',
        'Main',
        'TimeUnit',
        'Type',
    ];

    protected $url = 'logistics/Units';
}