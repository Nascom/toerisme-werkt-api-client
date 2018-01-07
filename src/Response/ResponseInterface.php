<?php

namespace Nascom\ToerismeWerktApiClient\Response;

/**
 * Interface ResponseInterface
 *
 * @package Nascom\ToerismeWerktApiClient\Response
 */
interface ResponseInterface
{
    /**
     * @return bool
     */
    public function isErrorResponse(): bool;
}
