<?php

namespace Nascom\ToerismeWerktApiClient\Response;

/**
 * Class Response
 *
 * @package Nascom\ToerismeWerktApiClient\Response
 */
class Response implements ResponseInterface
{
    /**
     * @inheritdoc
     */
    public function isErrorResponse(): bool
    {
        return false;
    }
}
