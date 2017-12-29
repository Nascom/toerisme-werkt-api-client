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
     * @var string
     */
    private $rawData;

    /**
     * @var array
     */
    private $data;

    /**
     * Response constructor.
     *
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->rawData = $data;
        $this->data = json_decode($data, true) ?: [];
    }

    /**
     * @inheritdoc
     */
    public static function fromApiResponse(string $apiResponse): ResponseInterface
    {
        return new static($apiResponse);
    }

    /**
     * @inheritdoc
     */
    public function getRawData(): string
    {
        return $this->rawData;
    }

    /**
     * @inheritdoc
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @inheritdoc
     */
    public function isErrorResponse(): bool
    {
        return false;
    }
}
