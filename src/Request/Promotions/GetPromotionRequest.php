<?php

namespace Nascom\ToerismeWerktApiClient\Request\Promotions;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;
use Nascom\ToerismeWerktApiClient\Response\ResourceResponse;

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

    /**
     * @inheritdoc
     */
    public function getResponseClass(): string
    {
        return ResourceResponse::class;
    }
}
