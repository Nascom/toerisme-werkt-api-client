<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class CapacityStatistics
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class CapacityStatistics
{
    /**
     * @var int|null
     */
    private $totalNumberOfUnits;

    /**
     * @var int|null
     */
    private $totalCapacity;

    /**
     * @return int|null
     */
    public function getTotalNumberOfUnits(): ?int
    {
        return $this->totalNumberOfUnits;
    }

    /**
     * @param int|null $totalNumberOfUnits
     */
    public function setTotalNumberOfUnits(?int $totalNumberOfUnits): void
    {
        $this->totalNumberOfUnits = $totalNumberOfUnits;
    }

    /**
     * @return int|null
     */
    public function getTotalCapacity(): ?int
    {
        return $this->totalCapacity;
    }

    /**
     * @param int|null $totalCapacity
     */
    public function setTotalCapacity(?int $totalCapacity): void
    {
        $this->totalCapacity = $totalCapacity;
    }
}
