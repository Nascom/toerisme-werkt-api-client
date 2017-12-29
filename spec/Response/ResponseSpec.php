<?php

namespace spec\Nascom\ToerismeWerktApiClient\Response;

use Nascom\ToerismeWerktApiClient\Response\Response;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ResponseSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Some JSON data');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Response::class);
    }

    function it_should_implement_the_response_interface()
    {
        $this->shouldImplement(ResponseInterface::class);
    }

    function it_can_be_constructed_from_an_api_response()
    {
        $this->beConstructedThrough('fromApiResponse', ['Some JSON data']);
    }

    function it_should_make_the_raw_data_available()
    {
        $this->beConstructedWith('{raw data}');
        $this->getRawData()->shouldBe('{raw data}');
    }

    function it_should_parse_the_json_data_into_an_array()
    {
        $this->beConstructedWith('{"test": "json"}');
        $this->getData()->shouldBeArray();
        $this->getData()->shouldHaveKeyWithValue('test', 'json');
    }
}
