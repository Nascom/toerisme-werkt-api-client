<?php

namespace Nascom\ToerismeWerktApiClient\ResponseHandler;

use Nascom\ToerismeWerktApiClient\Response\ErrorResponse;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;

/**
 * Class ResponseHandler
 *
 * @package Nascom\ToerismeWerktApiClient\ResponseHandler
 */
class ResponseHandler implements ResponseHandlerInterface
{
    /**
     * @inheritdoc
     */
    public function parseResponse
    (
        string $apiResponse,
        string $responseClass
    ): ResponseInterface
    {
        return $this->isErrorResponse($apiResponse)
            ? ErrorResponse::fromApiResponse($apiResponse)
            : call_user_func([$responseClass, 'fromApiResponse'], $apiResponse);
    }

    /**
     * @param string $apiResponse
     * @return bool
     */
    protected function isErrorResponse(string $apiResponse): bool
    {
        return !empty(json_decode($apiResponse, true)['errors']);
    }
}
