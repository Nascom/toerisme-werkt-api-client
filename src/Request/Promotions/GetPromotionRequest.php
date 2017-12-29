<?php

namespace Nascom\ToerismeWerktApiClient\Request\Promotions;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class GetPromotionRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\Promotions
 */
class GetPromotionRequest extends GetRequest
{
    /**
     * @var string
     */
    private $promotionId;

    /**
     * GetPromotionRequest constructor.
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
        return "promotions/{$this->promotionId}";
    }
}
