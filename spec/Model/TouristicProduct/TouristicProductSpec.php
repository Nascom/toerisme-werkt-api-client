<?php

namespace spec\Nascom\ToerismeWerktApiClient\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\Attributes;
use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProduct;
use PhpSpec\ObjectBehavior;
use spec\Nascom\ToerismeWerktApiClient\BeConstructedFromArray;
use spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct\SampleAttributes;
use spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct\SampleTouristicProduct;

class TouristicProductSpec extends ObjectBehavior
{
    use BeConstructedFromArray;

    function let()
    {
        $this->beConstructedFromArray(SampleTouristicProduct::asArray());
    }

    function it_is_initializable()
    {
        $this->beConstructedWith();
        $this->shouldHaveType(TouristicProduct::class);
    }

    function it_can_be_instantiated_from_an_array()
    {
        $this->shouldHaveType(TouristicProduct::class);
    }

    function it_can_extract_the_type()
    {
        $this->getType()->shouldBe('touristicproduct');
    }

    function it_can_extract_the_id()
    {
        $this->getId()->shouldBe('TouristicProduct-000000-0000-00-000-00000');
    }

    function it_can_extract_the_attributes()
    {
        $this->getAttributes()->shouldBeLike(Attributes::fromArray(SampleAttributes::asArray()));
    }
}
