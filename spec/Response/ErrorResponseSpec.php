<?php

namespace spec\Nascom\ToerismeWerktApiClient\Response;

use Nascom\ToerismeWerktApiClient\Model\Error;
use Nascom\ToerismeWerktApiClient\Response\ErrorResponse;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ErrorResponseSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('{error response}');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ErrorResponse::class);
    }

    function it_should_implement_the_response_interface()
    {
        $this->shouldImplement(ResponseInterface::class);
    }

    function it_should_be_an_error_response()
    {
        $this->isErrorResponse()->shouldBe(true);
    }

    function it_can_be_constructed_from_an_api_response()
    {
        $this->beConstructedThrough('fromApiResponse', ['{error response}']);
    }

    function it_should_provide_a_list_of_errors()
    {
        $this->beConstructedThrough('fromApiResponse', [$this->getApiErrorResponse()]);
        $this->getErrors()->shouldBeArray();
        $this->getErrors()->shouldHaveCount(1);
        $this->getErrors()->shouldBeLike([new Error('Error title', 'Error detail')]);
    }

    function it_should_still_provide_the_original_data()
    {
        $this->getData()->shouldBeArray();
        $this->getRawData()->shouldBeString();
    }

    private function getApiErrorResponse(): string
    {
        return '{"errors": [{"title": "Error title", "detail": "Error detail"}]}';
    }
}
