<?php

namespace Nascom\ToerismeWerktApiClient\Request;

/**
 * Class PutRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request
 */
abstract class PutRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getMethod(): string
    {
        return 'PUT';
    }
}
