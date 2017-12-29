<?php

namespace Nascom\ToerismeWerktApiClient\Request;

/**
 * Class GetRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request
 */
abstract class GetRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod(): string
    {
        return 'GET';
    }
}
