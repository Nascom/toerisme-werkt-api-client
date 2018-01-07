<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class CheckInTime
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class CheckInTime
{
    /**
     * @var string
     */
    private $checkInStarting = '';

    /**
     * @var string
     */
    private $checkOutUltimatelyAt = '';

    /**
     * @return string
     */
    public function getCheckInStarting(): string
    {
        return $this->checkInStarting;
    }

    /**
     * @param string $checkInStarting
     */
    public function setCheckInStarting(string $checkInStarting): void
    {
        $this->checkInStarting = $checkInStarting;
    }

    /**
     * @return string
     */
    public function getCheckOutUltimatelyAt(): string
    {
        return $this->checkOutUltimatelyAt;
    }

    /**
     * @param string $checkOutUltimatelyAt
     */
    public function setCheckOutUltimatelyAt(string $checkOutUltimatelyAt): void
    {
        $this->checkOutUltimatelyAt = $checkOutUltimatelyAt;
    }
}
