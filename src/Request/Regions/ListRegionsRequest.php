<?php

namespace Nascom\ToerismeWerktApiClient\Request\Regions;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;
use Nascom\ToerismeWerktApiClient\Response\Regions\ListRegionsResponse;

/**
 * Class ListRegionsRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\Regions
 */
class ListRegionsRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'regions';
    }

    /**
     * @inheritdoc
     */
    public function getResponseClass(): string
    {
        return ListRegionsResponse::class;
    }
}
