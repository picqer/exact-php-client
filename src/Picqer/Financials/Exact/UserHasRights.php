<?php

namespace Picqer\Financials\Exact;

/**
 * Class UserHasRights.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=UsersUserHasRights
 */
class UserHasRights extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
    ];

    protected $url = 'users/UserHasRights?endpoint={Edm.String}&action={Edm.String}';
}
