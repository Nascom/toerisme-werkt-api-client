<?php

namespace Nascom\ToerismeWerktApiClient\Response\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProductListView;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;

/**
 * Class ListTouristicProductsResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response\TouristicProducts
 */
class ListTouristicProductsResponse extends ListResponse
{
    /**
     * @return TouristicProductListView[]
     */
    public function getProducts(): array
    {
        return $this->getList();
    }
}
