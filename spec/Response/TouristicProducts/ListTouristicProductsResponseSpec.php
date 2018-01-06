<?php

namespace spec\Nascom\ToerismeWerktApiClient\Response\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;
use Nascom\ToerismeWerktApiClient\Response\TouristicProducts\ListTouristicProductsResponse;
use PhpSpec\ObjectBehavior;
use spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct\SampleTouristicProductListResponse;

class ListTouristicProductsResponseSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('fromApiResponse', [SampleTouristicProductListResponse::asJson()]);
    }

    function it_is_initializable()
    {
        $this->beConstructedWith('{some response}');
        $this->shouldHaveType(ListTouristicProductsResponse::class);
    }

    function it_should_implement_the_response_interface()
    {
        $this->shouldImplement(ResponseInterface::class);
    }

    function it_should_inherit_from_the_list_response()
    {
        $this->beConstructedWith('{some response}');
        $this->shouldHaveType(ListResponse::class);
    }

    function it_should_parse_the_list_data_to_products()
    {
        $this->getList()[0]->shouldHaveType(TouristicProduct::class);
    }
}
