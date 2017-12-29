<?php

namespace Nascom\ToerismeWerktApiClient\Request;

use Nascom\ToerismeWerktApiClient\Response\Response;

/**
 * Class AbstractRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request
 */
abstract class AbstractRequest implements RequestInterface
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @inheritdoc
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @inheritdoc
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @inheritdoc
     */
    public function needsAuth(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function getResponseClass(): string
    {
        return Response::class;
    }
}
