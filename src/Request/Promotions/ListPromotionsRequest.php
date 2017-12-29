<?php

namespace Nascom\ToerismeWerktApiClient\Request\Promotions;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;

/**
 * Class ListPromotionsRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\Promotions
 */
class ListPromotionsRequest extends GetRequest
{
    /**
     * ListPromotionsRequest constructor.
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
        return 'promotions';
    }

    /**
     * @inheritdoc
     */
    public function getResponseClass(): string
    {
        return ListResponse::class;
    }
}
