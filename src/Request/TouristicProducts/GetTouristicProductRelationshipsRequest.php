<?php

namespace Nascom\ToerismeWerktApiClient\Request\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class GetTouristicProductRelationshipsRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\TouristicProducts
 */
class GetTouristicProductRelationshipsRequest extends GetRequest
{
    /**
     * @var string
     */
    private $productId;

    /**
     * GetTouristicProductRelationshipsRequest constructor.
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
        return "touristicproducts/{$this->productId}/relationships/promotion";
    }
}
