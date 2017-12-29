<?php

namespace spec\Nascom\ToerismeWerktApiClient\Response;

use Nascom\ToerismeWerktApiClient\Exception\MalformedResponseDataException;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;
use Nascom\ToerismeWerktApiClient\Response\TokenResponse;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TokenResponseSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('fromApiResponse', ['{"meta": {"token": "some-token"}}']);
    }

    function it_is_initializable()
    {
        $this->beConstructedWith('{some response}');
        $this->shouldHaveType(TokenResponse::class);
    }

    function it_should_implement_the_response_interface()
    {
        $this->shouldImplement(ResponseInterface::class);
    }

    function it_can_be_constructed_from_an_api_response()
    {
        $this->beConstructedThrough('fromApiResponse', ['{token response}']);
    }

    function it_should_extract_the_token_from_the_response()
    {
        $this->getToken()->shouldBe('some-token');
    }

    function it_should_throw_an_error_when_the_token_cant_be_extracted()
    {
        $this->shouldThrow(MalformedResponseDataException::class)->during('fromApiResponse', ['{token response}']);
    }
}
