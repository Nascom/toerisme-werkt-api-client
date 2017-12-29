<?php

namespace Nascom\ToerismeWerktApiClient\Http;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Nascom\ToerismeWerktApiClient\Request\Auth\GetTokenRequest;
use Nascom\ToerismeWerktApiClient\Request\RequestInterface;

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
     */
    public function __construct
    (
        ClientInterface $httpClient,
        string $apiBaseUri,
        string $apiKey,
        array $options = []
    )
    {
        $this->httpClient = $httpClient;
        $this->apiBaseUri = $apiBaseUri;
        $this->apiKey = $apiKey;
        $this->options = array_merge_recursive($this->options, $options);
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
            $response = $this->httpClient->request(
              $request->getMethod(),
              $this->buildUrlFromRequest($request),
              $this->buildOptionsFromRequest($request)
            );
        }
        catch (RequestException $e) {
            // When the token is expired, a 401 status code will be emitted.
            // We'll renew the token and try again.
            if ($e->getResponse()->getStatusCode() == 401) {
                // @todo: limit this to prevent blowing the stack.
                $this->requestJwtToken();
                $this->handle($request);
            }
            else {
                throw $e;
            }
        }

        // @todo: map.
        return $response->getBody()->getContents();
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
        $token = $this->handle($authenticationRequest);

        $this->options['Authorization'] = 'Bearer ' . $token;
    }

    /**
     * @return bool
     */
    private function hasToken(): bool
    {
        return !empty($this->options['Authorization']);
    }
}
