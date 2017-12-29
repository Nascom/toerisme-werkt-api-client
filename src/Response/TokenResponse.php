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
     * @inheritdoc
     */
    public static function fromApiResponse(string $apiResponse): ResponseInterface
    {
        $tokenResponse = new static($apiResponse);
        $data = $tokenResponse->getData();
        if (empty($data['meta']['token'])) {
            throw new MalformedResponseDataException(
                'Token not present in the response data.'
            );
        }
        $tokenResponse->token = $data['meta']['token'];

        return $tokenResponse;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}
