<?php

namespace Nascom\ToerismeWerktApiClient\Model;

/**
 * Class Location
 *
 * @package Nascom\ToerismeWerktApiClient\Model
 */
class Location
{
    /**
     * @var float
     */
    private $longitude;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @param array $data
     * @return Location
     */
    public static function fromArray(array $data): self
    {
        $location = new static;
        $location->latitude = (float) ($data['latitude'] ?? 0.0);
        $location->longitude = (float) ($data['longitude'] ?? 0.0);

        return $location;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }
}
