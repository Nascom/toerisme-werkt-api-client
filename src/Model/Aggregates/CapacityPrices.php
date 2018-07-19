<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class CapacityPrices
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class CapacityPrices
{
    private $yearlyPrices = [];

    /**
     * @return array
     */
    public function getYearlyPrices(): array
    {
        return $this->yearlyPrices;
    }

    /**
     * @param array $yearlyPrices
     */
    public function setYearlyPrices(array $yearlyPrices): void
    {
        $this->yearlyPrices = $yearlyPrices;
    }

    /**
     * @param int $year
     * @return array
     */
    public function getYearlyPriceFor(int $year): array
    {
        return $this->yearlyPrices['y' . $year] ?? [];
    }
}
