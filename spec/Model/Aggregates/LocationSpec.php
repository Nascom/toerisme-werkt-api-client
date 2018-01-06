<?php

namespace spec\Nascom\ToerismeWerktApiClient\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Location;
use PhpSpec\ObjectBehavior;
use spec\Nascom\ToerismeWerktApiClient\BeConstructedFromArray;
use spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates\SampleLocation;

class LocationSpec extends ObjectBehavior
{
    use BeConstructedFromArray;

    function let()
    {
        $this->beConstructedFromArray(SampleLocation::asArray());
    }

    function it_is_initializable()
    {
        $this->beConstructedWith();
        $this->shouldHaveType(Location::class);
    }

    function it_can_be_instantiated_from_an_array()
    {
        $this->shouldHaveType(Location::class);
    }

    function it_can_extract_the_longitude()
    {
        $this->getLongitude()->shouldBe(43.21);
    }

    function it_can_extract_the_latitude()
    {
        $this->getLatitude()->shouldBe(12.34);
    }

    function it_defaults_to_zero_when_no_data_is_given()
    {
        $this->beConstructedFromArray([]);
        $this->getLongitude()->shouldBe(0.0);
        $this->getLatitude()->shouldBe(0.0);
    }

    function it_converts_strings_to_floats()
    {
        $location = [
            'longitude' => '12.34',
            'latitude' => '43.21'
        ];
        $this->beConstructedFromArray($location);
        $this->getLongitude()->shouldBeFloat();
        $this->getLatitude()->shouldBeFloat();
    }
}
