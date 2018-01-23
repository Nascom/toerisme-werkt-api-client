<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class ClosingPeriod
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class ClosingPeriod
{
    /**
     * @var string
     */
    private $startDate = '';

    /**
     * @var string
     */
    private $endDate = '';

    /**
     * @var string
     */
    private $remarks = '';

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate(string $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getRemarks(): string
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     */
    public function setRemarks(string $remarks): void
    {
        $this->remarks = $remarks;
    }
}
