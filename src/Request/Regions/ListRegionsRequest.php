<?php

namespace Nascom\ToerismeWerktApiClient\Request\Regions;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

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
}
