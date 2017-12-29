<?php

namespace spec\Nascom\ToerismeWerktApiClient\Request\Auth;

use Nascom\ToerismeWerktApiClient\Request\Auth\GetTokenRequest;
use Nascom\ToerismeWerktApiClient\Request\RequestInterface;
use Nascom\ToerismeWerktApiClient\Response\TokenResponse;
use PhpSpec\ObjectBehavior;

class GetTokenRequestSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('SOME_API_KEY');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(GetTokenRequest::class);
    }

    function it_should_implement_the_request_interface()
    {
        $this->shouldImplement(RequestInterface::class);
    }

    function it_should_be_a_put_request()
    {
        $this->getMethod()->shouldBe('PUT');
    }

    function it_should_put_the_api_key_in_the_query_parameters()
    {
        $this->getParameters()->shouldHaveKeyWithValue('API_KEY', 'SOME_API_KEY');
    }

    function it_should_have_the_token_response_class()
    {
        $this->getResponseClass()->shouldBe(TokenResponse::class);
    }

    function it_should_not_need_authentication()
    {
        $this->needsAuth()->shouldBe(false);
    }
}
