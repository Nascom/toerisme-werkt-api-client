<?php

namespace spec\Nascom\ToerismeWerktApiClient\Request;

use Nascom\ToerismeWerktApiClient\Request\LinkRequest;
use Nascom\ToerismeWerktApiClient\Request\RequestInterface;
use PhpSpec\ObjectBehavior;

class LinkRequestSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('http://foo.bar/api/v2/touristicproducts/?page[offset]=8');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(LinkRequest::class);
    }

    function it_implements_the_request_interface()
    {
        $this->shouldImplement(RequestInterface::class);
    }

    function it_should_always_be_a_get_request()
    {
        $this->getMethod()->shouldBe('GET');
    }

    function it_can_extract_the_endpoint_from_the_given_url()
    {
        $this->getEndpoint()->shouldBe('api/v2/touristicproducts/');
    }

    function it_will_return_an_empty_path_when_only_the_host_is_given()
    {
        $this->beConstructedWith('http://foo.bar');
        $this->getEndpoint()->shouldBe('');
    }

    function it_will_return_an_empty_path_when_the_root_path_is_given()
    {
        $this->beConstructedWith('http://foo.bar/');
        $this->getEndpoint()->shouldBe('');
    }

    function it_will_extract_the_query_parameters_from_the_url()
    {
        $this->beConstructedWith('http://foo.bar?key=value&test=true');
        $this->getParameters()->shouldBeLike([
            'key' => 'value',
            'test' => true
        ]);
    }

    function it_can_be_given_a_response_class()
    {
        $this->beConstructedWith('some_url', 'Some\\Response\\Class');
        $this->getResponseClass()->shouldBe('Some\\Response\\Class');
    }
}
