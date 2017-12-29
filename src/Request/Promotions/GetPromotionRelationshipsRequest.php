<?php

namespace Nascom\ToerismeWerktApiClient\Request\Promotions;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class GetPromotionRelationshipsRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\Promotions
 */
class GetPromotionRelationshipsRequest extends GetRequest
{
    /**
     * @var string
     */
    private $promotionId;

    /**
     * GetPromotionRelationships constructor.
     *
     * @param string $promotionId
     */
    public function __construct(string $promotionId)
    {
        $this->promotionId = $promotionId;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return "/promotions/{$this->promotionId}/relationships/touristproduct";
    }
}
