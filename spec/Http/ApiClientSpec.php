<?php

namespace spec\Nascom\ToerismeWerktApiClient\Http;

use GuzzleHttp\ClientInterface;
use Nascom\ToerismeWerktApiClient\Http\ApiClient;
use Nascom\ToerismeWerktApiClient\Http\ApiClientInterface;
use Nascom\ToerismeWerktApiClient\Request\RequestInterface;
use Nascom\ToerismeWerktApiClient\Response\Response;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Http\Message\ResponseInterface as HttpResponse;
use Psr\Http\Message\StreamInterface;

class ApiClientSpec extends ObjectBehavior
{
    function let(ClientInterface $client)
    {
        $this->beConstructedWith($client, 'BASE_URI', 'API_KEY');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ApiClient::class);
    }

    function it_implements_the_api_client_interface()
    {
        $this->shouldImplement(ApiClientInterface::class);
    }

    function it_can_handle_a_request(
        ClientInterface $client,
        RequestInterface $request,
        HttpResponse $response,
        StreamInterface $stream
    )
    {
        $stream->getContents()->willReturn('{some API response}');
        $response->getBody()->willReturn($stream);
        $this->createRequest($request, 'GET', 'some-endpoint');
        $client->request(
            'GET',
            Argument::containingString('some-endpoint'),
            Argument::any()
        )
            ->shouldBeCalled()
            ->willReturn($response);

        $this->handle($request)->shouldImplement(ResponseInterface::class);
    }

    private function createRequest
    (
        RequestInterface $request,
        string $method,
        string $endpoint,
        array $parameters = [],
        array $options = [],
        bool $needsAuth = false,
        string $responseClass = Response::class
    )
    {
        $request->getMethod()->willReturn($method);
        $request->getEndpoint()->willReturn($endpoint);
        $request->getParameters()->willReturn($parameters);
        $request->getOptions()->willReturn($options);
        $request->needsAuth()->willReturn($needsAuth);
        $request->getResponseClass()->willReturn($responseClass);
    }
}
