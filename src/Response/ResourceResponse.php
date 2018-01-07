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

    /**
     * @var array
     */
    private $relationships;

    /**
     * @var array
     */
    private $links;

    /**
     * ResourceResponse constructor.
     *
     * @param $resource
     * @param array $relationships
     * @param array $links
     */
    public function __construct
    (
        $resource,
        array $relationships = [],
        array $links = []
    )
    {
        $this->resource = $resource;
        $this->relationships = $relationships;
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @return array
     */
    public function getRelationships(): array
    {
        return $this->relationships;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }
}
