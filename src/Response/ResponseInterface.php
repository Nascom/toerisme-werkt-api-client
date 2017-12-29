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
     * @param string $apiResponse
     * @return ResponseInterface
     */
    public static function fromApiResponse(string $apiResponse): self;

    /**
     * Returns the decoded JSON response as an associative array.
     *
     * @return array
     */
    public function getData(): array;

    /**
     * Returns the raw response received from the server.
     *
     * @return string
     */
    public function getRawData(): string;

    /**
     * @return bool
     */
    public function isErrorResponse(): bool;
}
