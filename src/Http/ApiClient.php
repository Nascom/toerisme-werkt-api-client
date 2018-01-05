<?php

namespace Nascom\ToerismeWerktApiClient\Http;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Nascom\ToerismeWerktApiClient\Exception\AuthenticationFailedException;
use Nascom\ToerismeWerktApiClient\Request\Auth\GetTokenRequest;
use Nascom\ToerismeWerktApiClient\Request\RequestInterface;
use Nascom\ToerismeWerktApiClient\Response\TokenResponse;
use Nascom\ToerismeWerktApiClient\ResponseHandler\ResponseHandler;
use Nascom\ToerismeWerktApiClient\ResponseHandler\ResponseHandlerInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ApiClient
 *
 * @package Nascom\ToerismeWerktApiClient\Http
 */
class ApiClient implements ApiClientInterface
{
    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $apiBaseUri;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var ResponseHandler
     */
    protected $responseHandler;

    /**
     * @var array
     */
    protected $options = [
        'connect_timeout' => 3.0,
        'headers' => [
            'Accept' => 'application/json'
        ]
    ];

    /**
     * ApiClient constructor.
     *
     * @param ClientInterface $httpClient
     *   ToDo: remove the hard dependency on guzzle?
     * @param string $apiBaseUri
     * @param string $apiKey
     * @param array $options
     * @param ResponseHandlerInterface $responseHandler
     */
    public function __construct
    (
        ClientInterface $httpClient,
        string $apiBaseUri,
        string $apiKey,
        array $options = [],
        ResponseHandlerInterface $responseHandler = null
    )
    {
        $this->httpClient = $httpClient;
        $this->apiBaseUri = $apiBaseUri;
        $this->apiKey = $apiKey;
        $this->options = array_merge_recursive($this->options, $options);
        $this->responseHandler = $responseHandler ?: new ResponseHandler();
    }

    /**
     * @inheritdoc
     */
    public function handle(RequestInterface $request)
    {
        if ($request->needsAuth() && !$this->hasToken()) {
            $this->requestJwtToken();
        }

        try {
            $response = $this->doRequest($request);
        }
        catch (RequestException $e) {
            // When the token is expired, a 401 status code will be emitted.
            // We'll renew the token and try again.
            if ($this->isTokenExpired($e)) {
                $this->requestJwtToken();
                return $this->handle($request);
            }

            throw $e;
        }

        return $this->responseHandler->parseResponse(
            $response->getBody()->getContents(),
            $request->getResponseClass()
        );
    }

    /**
     * @param RequestException $e
     * @return bool
     */
    protected function isTokenExpired(RequestException $e): bool
    {
        // @todo: actually perform this check.
        return $e->getResponse()->getStatusCode() == 401 && false;
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    protected function doRequest(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient->request(
          $request->getMethod(),
          $this->buildUrlFromRequest($request),
          $this->buildOptionsFromRequest($request)
        );
    }

    /**
     * @param RequestInterface $request
     * @return string
     */
    protected function buildUrlFromRequest(RequestInterface $request): string
    {
        return $this->apiBaseUri . '/' . $request->getEndpoint();
    }

    /**
     * @param RequestInterface $request
     * @return array
     */
    protected function buildOptionsFromRequest(RequestInterface $request): array
    {
        $options = array_merge_recursive(
            $this->options,
            $request->getOptions()
        );

        if (!empty($request->getParameters())) {
            $options['query'] = array_merge_recursive(
                $options['query'] ?? [],
                $request->getParameters()
            );
        }

        return $options;
    }

    /**
     * Requests a new JWT token and sets it as the Authorization header.
     */
    protected function requestJwtToken(): void
    {
        $authenticationRequest = new GetTokenRequest($this->apiKey);
        /** @var TokenResponse $tokenResponse */
        $tokenResponse = $this->handle($authenticationRequest);
        if ($tokenResponse->isErrorResponse()) {
            throw new AuthenticationFailedException(sprintf(
                'Authentication failed. Error: %s',
                $tokenResponse->getFirstError()->getDescription()
            ));
        }

        $token = $tokenResponse->getToken();
        $this->options['headers']['Authorization'] = 'Bearer ' . $token;
    }

    /**
     * @return bool
     */
    private function hasToken(): bool
    {
        return !empty($this->options['headers']['Authorization']);
    }
}
