<?php

namespace Nascom\ToerismeWerktApiClient\Request;

/**
 * Class LinkRequest
 *
 * Can be used to create a request from a link reference.
 *
 * @package Nascom\ToerismeWerktApiClient\Request
 */
class LinkRequest extends GetRequest
{
    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $responseClass;

    /**
     * LinkRequest constructor.
     *
     * @param string $link
     * @param string $responseClass
     */
    public function __construct
    (
        string $link,
        string $responseClass = ''
    )
    {
        $this->link = $link;
        $this->responseClass = $responseClass;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        $path = parse_url($this->link, PHP_URL_PATH);
        if (empty($path)) {
            return '';
        }

        return substr($path, 1);
    }

    /**
     * @inheritdoc
     */
    public function getParameters(): array
    {
        $queryString = parse_url($this->link, PHP_URL_QUERY);
        if (empty($queryString)) {
            return [];
        }

        $parameters = [];
        $queryCombinations = explode('&',$queryString);
        foreach ($queryCombinations as $queryCombination) {
            [$key, $value] = explode('=', $queryCombination);
            $parameters[$key] = $value;
        }

        return $parameters;
    }

    /**
     * @inheritdoc
     */
    public function getResponseClass(): string
    {
        if (!empty($this->responseClass)) {
            return $this->responseClass;
        }

        return parent::getResponseClass();
    }
}
