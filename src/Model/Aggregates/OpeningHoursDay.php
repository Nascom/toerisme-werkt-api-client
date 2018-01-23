<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class OpeningHoursDay
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class OpeningHoursDay
{
    /**
     * @var int
     */
    private $dayOfWeek;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $till;

    /**
     * @return int
     */
    public function getDayOfWeek(): int
    {
        return $this->dayOfWeek;
    }

    /**
     * @param int $dayOfWeek
     */
    public function setDayOfWeek(int $dayOfWeek): void
    {
        $this->dayOfWeek = $dayOfWeek;
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
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getTill(): string
    {
        return $this->till;
    }

    /**
     * @param string $till
     */
    public function setTill(string $till): void
    {
        $this->till = $till;
    }
}
