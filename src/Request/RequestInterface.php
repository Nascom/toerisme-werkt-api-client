<?php

namespace Nascom\ToerismeWerktApiClient\Request;

/**
 * Interface RequestInterface
 *
 * @package Nascom\ToerismeWerktApiClient\Request
 */
interface RequestInterface
{
    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * @return array
     */
    public function getOptions(): array;

    /**
     * @return array
     */
    public function getParameters(): array;

    /**
     * @return bool
     */
    public function needsAuth(): bool;
}
