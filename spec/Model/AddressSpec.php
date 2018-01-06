<?php

namespace spec\Nascom\ToerismeWerktApiClient\Model;

use Nascom\ToerismeWerktApiClient\Model\Address;
use PhpSpec\ObjectBehavior;
use spec\Nascom\ToerismeWerktApiClient\BeConstructedFromArray;
use spec\Nascom\ToerismeWerktApiClient\HasOptionalProperties;
use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleAddress;

class AddressSpec extends ObjectBehavior
{
    use BeConstructedFromArray;
    use HasOptionalProperties;

    function let()
    {
        $this->beConstructedFromArray(SampleAddress::asArray());
    }

    function it_is_initializable()
    {
        $this->beConstructedWith();
        $this->shouldHaveType(Address::class);
    }

    function it_can_be_instantiated_from_an_array()
    {
        $this->shouldHaveType(Address::class);
    }

    function it_can_extract_the_street()
    {
        $this->getStreet()->shouldBe('Some street');
    }

    function it_can_extract_the_house_number()
    {
        $this->getHouseNumber()->shouldBe('34');
    }

    function it_can_extract_the_postal_code()
    {
        $this->getPostalCode()->shouldBe('9000');
    }

    function it_can_extract_the_municipality()
    {
        $this->getMunicipality()->shouldBe('Genk');
    }

    function its_street_is_optional()
    {
        $this->hasOptionalProperty('street');
    }

    function its_house_number_is_optional()
    {
        $this->hasOptionalProperty('houseNumber');
    }

    function its_postal_code_is_optional()
    {
        $this->hasOptionalProperty('postalCode');
    }

    function its_municipality_is_optional()
    {
        $this->hasOptionalProperty('municipality');
    }

    protected function hasOptionalProperty(string $property)
    {
        $data = SampleAddress::without($property);
        $this->beConstructedFromArray($data);
        $this->checkIfPropertyIsOptional($property);
    }
}
