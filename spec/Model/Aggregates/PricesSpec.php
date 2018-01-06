<?php

namespace spec\Nascom\ToerismeWerktApiClient\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Prices;
use PhpSpec\ObjectBehavior;
use spec\Nascom\ToerismeWerktApiClient\BeConstructedFromArray;
use spec\Nascom\ToerismeWerktApiClient\HasOptionalProperties;
use spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates\SamplePrices;

class PricesSpec extends ObjectBehavior
{
    use BeConstructedFromArray;
    use HasOptionalProperties;

    function let()
    {
        $this->beConstructedFromArray(SamplePrices::asArray());
    }

    function it_is_initializable()
    {
        $this->beConstructedWith();
        $this->shouldHaveType(Prices::class);
    }

    function it_can_be_instantiated_from_an_array()
    {
        $this->shouldHaveType(Prices::class);
    }

    function it_can_extract_the_individual_price()
    {
        $this->getIndividualPrices()->shouldBe('12,34');
    }

    function it_can_extract_the_group_prices()
    {
        $this->getGroupPrices()->shouldBe('23,45');
    }

    function it_can_extract_the_average_adult_price()
    {
        $this->getAveragePriceAdult()->shouldBe('34,56');
    }

    function its_individual_prices_are_optional()
    {
        $this->hasOptionalProperty('individualPrices');
    }

    function its_group_prices_are_optional()
    {
        $this->hasOptionalProperty('groupPrices');
    }

    function its_average_price_adult_is_optional()
    {
        $this->hasOptionalProperty('averagePriceAdult');
    }

    protected function hasOptionalProperty(string $property)
    {
        $data = SamplePrices::without($property);
        $this->beConstructedFromArray($data);
        $this->checkIfPropertyIsOptional($property);
    }
}
