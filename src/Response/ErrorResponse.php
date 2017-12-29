<?php

namespace Nascom\ToerismeWerktApiClient\Response;

use Nascom\ToerismeWerktApiClient\Model\Error;

/**
 * Class ErrorResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response
 */
class ErrorResponse extends Response
{
    /**
     * @var Error[]
     */
    private $errors = [];

    /**
     * @inheritdoc
     */
    public static function fromApiResponse(string $apiResponse): ResponseInterface
    {
        $errorResponse = new static($apiResponse);
        $errors = $errorResponse->getData()['errors'] ?? [];

        $errorResponse->errors = array_map(function (array $errorData): Error {
            return new Error(
                $errorData['title'] ?? '',
                $errorData['detail'] ?? ''
            );
        }, $errors);

        return $errorResponse;
    }

    /**
     * @inheritdoc
     */
    public function isErrorResponse(): bool
    {
        return true;
    }

    /**
     * @return Error[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
