<?php

namespace spec\Nascom\ToerismeWerktApiClient\ResponseHandler;

use Nascom\ToerismeWerktApiClient\Response\ErrorResponse;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;
use Nascom\ToerismeWerktApiClient\Response\Response;
use Nascom\ToerismeWerktApiClient\ResponseHandler\ResponseHandler;
use Nascom\ToerismeWerktApiClient\ResponseHandler\ResponseHandlerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ResponseHandlerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ResponseHandler::class);
    }

    function it_implements_the_response_handler_interface()
    {
        $this->shouldImplement(ResponseHandlerInterface::class);
    }

    function it_returns_an_error_response_when_provided_with_error_api_data()
    {
        $errorData = '{"errors":[{"title": "some-error-title", "detail": "some-error-detail"}]}';
        $this->parseResponse($errorData, Response::class)
            ->shouldBeAnInstanceOf(ErrorResponse::class);
    }

    function it_returns_the_target_response_class_for_correct_data()
    {
        $data = '{Some API response}';
        $this->parseResponse($data, Response::class)->shouldBeAnInstanceOf(Response::class);
    }

    function it_can_be_passed_any_response_interface_class()
    {
        $data = '{Some API response}';
        $this->parseResponse($data, ListResponse::class)->shouldBeAnInstanceOf(ListResponse::class);
    }
}
