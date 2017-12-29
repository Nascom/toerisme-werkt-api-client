<?php

namespace Nascom\ToerismeWerktApiClient\Request\Auth;

use Nascom\ToerismeWerktApiClient\Request\PutRequest;

/**
 * Class GetTokenRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\Auth
 */
class GetTokenRequest extends PutRequest
{
    /**
     * GetTokenRequest constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->options['API_KEY'] = $apiKey;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'authentication/token';
    }

    /**
     * @return bool
     */
    public function needsAuth(): bool
    {
        return false;
    }
}
