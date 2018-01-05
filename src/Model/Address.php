<?php

namespace Nascom\ToerismeWerktApiClient\Model;

/**
 * Class Address
 *
 * @package Nascom\ToerismeWerktApiClient\Model
 */
class Address
{
    use ArrayInstantiatable;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $houseNumber;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $municipality;

    /**
     * @param array $data
     * @return Address
     */
    public static function fromArray(array $data): self
    {
        $address = new static;
        $address->setPropertiesFromArray($data);

        return $address;
    }

    /**
     * @return null|string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @return null|string
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @return null|string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @return null|string
     */
    public function getMunicipality(): ?string
    {
        return $this->municipality;
    }
}