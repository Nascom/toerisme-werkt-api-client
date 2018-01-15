<?php

namespace Nascom\ToerismeWerktApiClient\Response\Facilities;

use Nascom\ToerismeWerktApiClient\Model\Facility\Facility;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;

/**
 * Class ListFacilitiesResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response\Facilities
 */
class ListFacilitiesResponse extends ListResponse
{
    /**
     * @return Facility[]
     */
    public function getFacilities(): array
    {
        return $this->getList();
    }
}
