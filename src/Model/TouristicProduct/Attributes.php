<?php

namespace Nascom\ToerismeWerktApiClient\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Address;
use Nascom\ToerismeWerktApiClient\Model\ArrayInstantiatable;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Location;

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

    private $prices;

    /**
     * @param array $data
     * @return Attributes
     */
    public static function fromArray(array $data): self
    {
        $attributes = new static;
        $attributes->setPropertiesFromArray($data);
        $attributes->address = Address::fromArray($attributes->address ?: []);
        $attributes->location = Location::fromArray($attributes->location ?: []);
        if (!empty($attributes->lastModified)) {
            $attributes->lastModified = new \DateTime($attributes->lastModified);
        }

        return $attributes;
    }

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
}
