<?php

namespace spec\Nascom\ToerismeWerktApiClient\Response;

use Nascom\ToerismeWerktApiClient\Response\ListResponse;
use Nascom\ToerismeWerktApiClient\Response\ResponseInterface;
use PhpSpec\ObjectBehavior;
use spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct\SampleTouristicProductListResponse;

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
        $this->getList()->shouldHaveCount(2);
    }

    private function getExampleListResponse(): string
    {
        return SampleTouristicProductListResponse::asJson();
    }

    private function getPagelessExampleListResponse(): string
    {
        $sampleResponse = SampleTouristicProductListResponse::asArray();
        $sampleResponse['links'] = ['self' => $sampleResponse['links']['self']];

        return json_encode($sampleResponse);
    }
}
