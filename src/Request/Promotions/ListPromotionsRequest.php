<?php

namespace Nascom\ToerismeWerktApiClient\Request\Promotions;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class ListPromotionsRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\Promotions
 */
class ListPromotionsRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'promotions';
    }
}
