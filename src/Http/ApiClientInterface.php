<?php

namespace Nascom\ToerismeWerktApiClient\Http;

use Nascom\ToerismeWerktApiClient\Request\RequestInterface;

/**
 * Interface ApiClientInterface
 *
 * @package Nascom\ToerismeWerktApiClient\Http
 */
interface ApiClientInterface
{
    /**
     * @param RequestInterface $request
     * @return mixed
     */
    public function handle(RequestInterface $request);
}
