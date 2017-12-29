<?php

namespace spec\Nascom\ToerismeWerktApiClient\Response;

use Nascom\ToerismeWerktApiClient\Response\ListResponse;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ListResponseSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('fromApiResponse', [$this->getExampleListResponse()]);
    }

    function it_is_initializable()
    {
        $this->beConstructedWith('{some response}');
        $this->shouldHaveType(ListResponse::class);
    }

    function it_should_implement_the_response_interface()
    {
        $this->shouldImplement(ResponseInterface::class);
    }

    function it_can_extract_the_links_from_the_api_response()
    {
        $this->getLinks()->shouldBeArray();
        $this->getLinks()->shouldHaveKeyWithValue(
            'self',
            'http://foo.bar/api/v2/touristicproducts/'
        );
    }

    function it_can_extract_the_current_link_from_the_api_response()
    {
        $this->getSelfLink()->shouldBe('http://foo.bar/api/v2/touristicproducts/');
    }

    function it_can_extract_the_next_link_from_the_api_response()
    {
        $this->getNextLink()->shouldBe('http://foo.bar/api/v2/touristicproducts/?page[offset]=4');
    }

    function it_can_extract_the_last_link_from_the_api_response()
    {
        $this->getLastLink()->shouldBe('http://foo.bar/api/v2/touristicproducts/?page[offset]=8');
    }

    function it_can_extract_the_previous_link_from_the_api_response()
    {
        $this->getPrevLink()->shouldBe('http://foo.bar/api/v2/touristicproducts/?page[offset]=2');
    }

    function it_can_extract_the_first_link_from_the_api_response()
    {
        $this->getFirstLink()->shouldBe('http://foo.bar/api/v2/touristicproducts/?page[offset]=1');
    }

    function it_knows_when_there_is_another_page_available()
    {
        $this->hasNextPage()->shouldBe(true);
    }

    function it_knows_when_there_is_no_next_page_available()
    {
        $this->beConstructedThrough('fromApiResponse', [$this->getPagelessExampleListResponse()]);
        $this->hasNextPage()->shouldBe(false);
    }

    function it_can_extract_the_data_list()
    {
        $this->getList()->shouldBeArray();
        $this->getList()->shouldHaveCount(1);
    }

    private function getExampleListResponse(): string
    {
        return <<<JSON
{
    "links": {
        "self": "http://foo.bar/api/v2/touristicproducts/",
        "next": "http://foo.bar/api/v2/touristicproducts/?page[offset]=4",
        "last": "http://foo.bar/api/v2/touristicproducts/?page[offset]=8",
        "prev": "http://foo.bar/api/v2/touristicproducts/?page[offset]=2",
        "first": "http://foo.bar/api/v2/touristicproducts/?page[offset]=1"
    },
    "data": [{
        "type": "touristicproduct",
        "id": "TouristicProduct-000000-0000-00-000-00000",
        "attributes": {
            "touristicProductType": "hotel",
            "title": "Heidezicht",
            "description": "Een hotel met zicht op de heide",
            "address": {
                "street": "teststraat",
                "houseNumber": "1",
                "postalCode": "9000",
                "municipality": "Gent"
            },
            "location": {
                "longitude": 0.0,
                "latitude": 0.0
            },
            "image": "​ http://foo.bar/image.jpg​ ",
            "lastModified": "2016-07-26T23:59:59Z"
        },
        "links": {
            "self": "http://foo.bar/api/v2/touristicproducts/TouristicProduct-000000-0000-00-000-00000"
        }
    }]
}
JSON;
    }

    private function getPagelessExampleListResponse(): string
    {
        return <<<JSON
{
    "links": {
        "self": "http://foo.bar/api/v2/touristicproducts/"
    },
    "data": []
}
JSON;
    }
}
