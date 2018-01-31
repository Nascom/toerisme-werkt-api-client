<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class HolidayOpeningHours
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class HolidayOpeningHours
{
    /**
     * @var Period
     */
    private $hours;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime|null
     */
    private $from;

    /**
     * @var \DateTime|null
     */
    private $till;

    public function __construct()
    {
        $this->hours = new Period();
    }

    /**
     * @return Period
     */
    public function getHours(): Period
    {
        return $this->hours;
    }

    /**
     * @param Period $hours
     */
    public function setHours(Period $hours): void
    {
        $this->hours = $hours;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime|null
     */
    public function getFrom(): ?\DateTime
    {
        return $this->from;
    }

    /**
     * @param \DateTime $from
     */
    public function setFrom(\DateTime $from): void
    {
        $this->from = $from;
    }

    /**
     * @return \DateTime|null
     */
    public function getTill(): ?\DateTime
    {
        return $this->till;
    }

    /**
     * @param \DateTime $till
     */
    public function setTill(\DateTime $till): void
    {
        $this->till = $till;
    }
}
