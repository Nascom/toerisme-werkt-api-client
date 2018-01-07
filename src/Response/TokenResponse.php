<?php

namespace Nascom\ToerismeWerktApiClient\Response;

use Nascom\ToerismeWerktApiClient\Exception\MalformedResponseDataException;

/**
 * Class TokenResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response
 */
class TokenResponse extends Response
{
    /**
     * @var string
     */
    private $token;

    /**
     * TokenResponse constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}
