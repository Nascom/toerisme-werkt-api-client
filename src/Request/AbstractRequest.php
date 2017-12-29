<?php

namespace Nascom\ToerismeWerktApiClient\Request;

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
}
