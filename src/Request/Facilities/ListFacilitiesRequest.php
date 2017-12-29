<?php

namespace Nascom\ToerismeWerktApiClient\Request\Facilities;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class ListFacilitiesRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\Facilities
 */
class ListFacilitiesRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'facilities';
    }
}
