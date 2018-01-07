<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class Prices
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class Prices
{
    /**
     * @var string|null
     */
    private $individualPrices;

    /**
     * @var string|null
     */
    private $groupPrices;

    /**
     * @var string|null
     */
    private $averagePriceAdult;

    /**
     * @return null|string
     */
    public function getIndividualPrices(): ?string
    {
        return $this->individualPrices;
    }

    /**
     * @param null|string $individualPrices
     */
    public function setIndividualPrices(?string $individualPrices): void
    {
        $this->individualPrices = $individualPrices;
    }

    /**
     * @return null|string
     */
    public function getGroupPrices(): ?string
    {
        return $this->groupPrices;
    }

    /**
     * @param null|string $groupPrices
     */
    public function setGroupPrices(?string $groupPrices): void
    {
        $this->groupPrices = $groupPrices;
    }

    /**
     * @return null|string
     */
    public function getAveragePriceAdult(): ?string
    {
        return $this->averagePriceAdult;
    }

    /**
     * @param null|string $averagePriceAdult
     */
    public function setAveragePriceAdult(?string $averagePriceAdult): void
    {
        $this->averagePriceAdult = $averagePriceAdult;
    }
}
