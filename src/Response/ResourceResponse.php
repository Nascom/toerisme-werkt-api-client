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
     * @return array
     */
    public function getResource(): array
    {
        return $this->getData()['data'] ?? [];
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
