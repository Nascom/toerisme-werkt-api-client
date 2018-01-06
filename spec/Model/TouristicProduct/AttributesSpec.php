<?php

namespace spec\Nascom\ToerismeWerktApiClient\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\Address;
use Nascom\ToerismeWerktApiClient\Model\Location;
use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\Attributes;
use PhpSpec\ObjectBehavior;
use spec\Nascom\ToerismeWerktApiClient\BeConstructedFromArray;
use spec\Nascom\ToerismeWerktApiClient\HasOptionalProperties;
use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleAddress;
use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleLocation;
use spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct\SampleAttributes;

class AttributesSpec extends ObjectBehavior
{
    use BeConstructedFromArray;
    use HasOptionalProperties;

    function let()
    {
        $this->beConstructedFromArray(SampleAttributes::asArray());
    }

    function it_is_initializable()
    {
        $this->beConstructedWith();
        $this->shouldHaveType(Attributes::class);
    }

    function it_can_be_instantiated_from_an_array()
    {
        $this->shouldHaveType(Attributes::class);
    }

    function it_can_extract_the_product_type()
    {
        $this->getTouristicProductType()->shouldBe('hotel');
    }

    function it_can_extract_the_title()
    {
        $this->getTitle()->shouldBe('Heidezicht');
    }

    function it_can_extract_the_description()
    {
        $this->getDescription()->shouldBe('Een hotel met zicht op de heide');
    }

    function it_can_extract_the_address()
    {
        $this->getAddress()->shouldBeLike(Address::fromArray(SampleAddress::asArray()));
    }

    function it_can_extract_the_location()
    {
        $this->getLocation()->shouldBeLike(Location::fromArray(SampleLocation::asArray()));
    }

    function it_can_extract_the_image()
    {
        $this->getImage()->shouldBe('http://foo.bar/image.jpg​');
    }

    function it_converts_the_modified_date_into_a_datetime_object()
    {
        $this->getLastModified()->shouldHaveType(\DateTime::class);
    }

    function it_can_extract_the_modified_date()
    {
        $this->getLastModified()->shouldBeLike(new \DateTime('2016-07-26T23:59:59Z'));
    }

    function its_product_type_is_optional()
    {
        $this->hasOptionalProperty('touristicProductType');
    }

    function its_title_is_optional()
    {
        $this->hasOptionalProperty('title');
    }

    function its_description_is_optional()
    {
        $this->hasOptionalProperty('description');
    }

    function its_image_is_optional()
    {
        $this->hasOptionalProperty('image');
    }

    protected function hasOptionalProperty(string $property)
    {
        $data = SampleAttributes::without($property);
        $this->beConstructedFromArray($data);
        $this->checkIfPropertyIsOptional($property);
    }
}
