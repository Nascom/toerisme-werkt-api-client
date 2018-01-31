<?php

namespace Nascom\ToerismeWerktApiClient\Response\Regions;

use Nascom\ToerismeWerktApiClient\Model\Region;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;

/**
 * Class ListRegionsResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response\Regions
 */
class ListRegionsResponse extends ListResponse
{
    /**
     * @return Region[]
     */
    public function getRegions(): array
    {
        return $this->getList();
    }
}
