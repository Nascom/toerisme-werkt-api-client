<?php

namespace Nascom\ToerismeWerktApiClient\Response\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Response\ResourceResponse;

/**
 * Class TouristicProductResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response\TouristicProducts
 */
class TouristicProductResponse extends ResourceResponse
{
    /**
     * @return TouristicProduct
     */
    public function getTouristicProduct(): TouristicProduct
    {
        return $this->getResource();
    }
}
