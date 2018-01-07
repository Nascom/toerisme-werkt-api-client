<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class Address
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class Address
{
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
     * @var string|null
     */
    private $bus;

    /**
     * @return null|string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param null|string $street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return null|string
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param null|string $houseNumber
     */
    public function setHouseNumber(?string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return null|string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param null|string $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return null|string
     */
    public function getMunicipality(): ?string
    {
        return $this->municipality;
    }

    /**
     * @param null|string $municipality
     */
    public function setMunicipality(?string $municipality): void
    {
        $this->municipality = $municipality;
    }

    /**
     * @return null|string
     */
    public function getBus(): ?string
    {
        return $this->bus;
    }

    /**
     * @param null|string $bus
     */
    public function setBus(?string $bus): void
    {
        $this->bus = $bus;
    }
}
