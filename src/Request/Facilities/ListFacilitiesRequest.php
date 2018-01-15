<?php

namespace Nascom\ToerismeWerktApiClient\Request\Facilities;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;
use Nascom\ToerismeWerktApiClient\Response\Facilities\ListFacilitiesResponse;

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

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
        return ListFacilitiesResponse::class;
    }
}
