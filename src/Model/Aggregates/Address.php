<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\ArrayInstantiatable;

/**
 * Class Address
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
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

    /**
     * @return null|string
     */
    public function getBus(): ?string
    {
        return $this->bus;
    }
}
