<?php

namespace Picqer\Financials\Exact;

/**
 * Class SyncTimestamp.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadSyncSyncSyncTimestamp
 *
 * @property string $Modified Last modified date
 * @property string $API Endpoint name of Sync API.
 * @property int $TimeStampAsBigInt Timestamp for Sync API
 */
class SyncTimestamp extends Model
{
    use Query\Findable;

    protected $primaryKey = 'Modified';

    protected $fillable = [
        'Modified',
        'API',
        'TimeStampAsBigInt',
    ];

    protected $url = 'read/sync/Sync/SyncTimestamp';
}
