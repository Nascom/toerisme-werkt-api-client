<?php

namespace Nascom\ToerismeWerktApiClient\Response\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Response\ResourceResponse;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;

/**
 * Class TouristicProductResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response\TouristicProducts
 */
class TouristicProductResponse extends ResourceResponse
{
    /**
     * @inheritdoc
     */
    public static function fromApiResponse(string $apiResponse): ResponseInterface
    {
        $response = parent::fromApiResponse($apiResponse);
        $response->resource = TouristicProduct::fromArray($response->resource);

        return $response;
    }

    /**
     * @inheritdoc
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @return TouristicProduct
     */
    public function getTouristicProduct(): TouristicProduct
    {
        return $this->getResource();
    }
}
