<?php

namespace Nascom\ToerismeWerktApiClient\Request\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class GetTouristProductRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\TouristicProducts
 */
class GetTouristProductRequest extends GetRequest
{
    /**
     * @var string
     */
    private $productId;

    /**
     * GetTouristProductRequest constructor.
     *
     * @param string $productId
     */
    public function __construct(string $productId)
    {
        $this->productId = $productId;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return "touristicproducts/{$this->productId}";
    }
}
