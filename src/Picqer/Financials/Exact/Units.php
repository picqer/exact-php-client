<?php

namespace Picqer\Financials\Exact;

/**
 * Class Units
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=LogisticsUnits
 *
 * @property string $ID Primary key
 * @property bool $Active Indicates whether a unit is in use
 * @property string $Code Unique code for the unit
 * @property string $Description Description
 * @property int $Division Division code
 * @property int $Main	Indicates the main unit per division. Will be used when creating new item
 * @property string $TimeUnit If Type = 'T' (time) then this fields indicates the type of time frame. yy = Year, mm = Month, wk = Week, dd = Day, hh = Hour, mi = Minute, ss = Second
 * @property string $Type Type 'Time' is especially important for contracts.

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