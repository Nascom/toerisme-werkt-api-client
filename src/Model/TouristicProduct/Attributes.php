<?php

namespace Nascom\ToerismeWerktApiClient\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Address;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Prices;
use Nascom\ToerismeWerktApiClient\Model\ArrayInstantiatable;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Location;
use Nascom\ToerismeWerktApiClient\Model\Region;

/**
 * Class Attributes
 *
 * @package Nascom\ToerismeWerktApiClient\Model\TouristicProduct
 */
class Attributes
{
    use ArrayInstantiatable;

    /**
     * @var string|null
     */
    private $touristicProductType;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var Address
     */
    private $address;

    /**
     * @var Location
     */
    private $location;

    /**
     * @var string|null
     */
    private $image;

    /**
     * @var \DateTime
     */
    private $lastModified;

    /**
     * @var Prices
     */
    private $prices;

    /**
     * @var Region
     */
    private $region;

    /**
     * @return null|string
     */
    public function getTouristicProductType(): ?string
    {
        return $this->touristicProductType;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return null|string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @return \DateTime
     */
    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    /**
     * @return Prices
     */
    public function getPrices(): Prices
    {
        return $this->prices;
    }

    /**
     * @return Region
     */
    public function getRegion(): Region
    {
        return $this->region;
    }
}
