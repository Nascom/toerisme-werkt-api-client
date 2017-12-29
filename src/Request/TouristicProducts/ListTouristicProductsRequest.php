<?php

namespace Nascom\ToerismeWerktApiClient\Request\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class ListTouristicProductsRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\TouristicProducts
 */
class ListTouristicProductsRequest extends GetRequest
{
    /**
     * ListTouristicProductsRequest constructor.
     *
     * @param array $filters
     */
    public function __construct(array $filters = [])
    {
        $this->parameters = array_merge($this->parameters, $filters);
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'touristicproducts';
    }
}
