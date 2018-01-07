<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class Location
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
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
     * Location constructor.
     *
     * @param float $longitude
     * @param float $latitude
     */
    public function __construct(float $longitude, float $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
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
