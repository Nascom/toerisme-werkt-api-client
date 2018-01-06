<?php

namespace Nascom\ToerismeWerktApiClient\Response;

/**
 * Class ResourceResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response
 */
class ResourceResponse extends Response
{
    /**
     * @var mixed
     */
    protected $resource;

    public static function fromApiResponse(string $apiResponse): ResponseInterface
    {
        $response = parent::fromApiResponse($apiResponse);
        $response->resource = $response->getData()['data'] ?? [];

        return $response;
    }

    /**
     * @return mixed
     */
    public function getResource()
    {
        return $this->resource ?: [];
    }

    /**
     * @return array
     */
    public function getRelationships(): array
    {
        return $this->getData()['relationships'] ?? [];
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->getData()['links'] ?? [];
    }
}
