<?php

namespace Nascom\ToerismeWerktApiClient\ResponseHandler;

use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;

/**
 * Interface ResponseHandlerInterface
 *
 * @package Nascom\ToerismeWerktApiClient\ResponseHandler
 */
interface ResponseHandlerInterface
{
    /**
     * @param string $apiResponse
     * @param string $responseClass
     * @return ResponseInterface
     */
    public function parseResponse(
        string $apiResponse,
        string $responseClass
    ): ResponseInterface;
}
