<?php

namespace Nascom\ToerismeWerktApiClient\Response\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;

/**
 * Class ListTouristicProductsResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response\TouristicProducts
 */
class ListTouristicProductsResponse extends ListResponse
{
    /**
     * @inheritdoc
     */
    public static function fromApiResponse(string $apiResponse): ResponseInterface
    {
        $response = parent::fromApiResponse($apiResponse);
        $response->list = array_map(
            function (array $productListView): TouristicProduct {
                return TouristicProduct::fromArray($productListView);
            },
            $response->list
        );

        return $response;
    }
}
