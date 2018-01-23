<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class OpeningHours
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class OpeningHours
{
    /**
     * @var OpeningHoursDay[]
     */
    private $days;

    /**
     * @var \DateTime
     */
    private $from;

    /**
     * @var \DateTime
     */
    private $till;

    /**
     * @return OpeningHoursDay[]
     */
    public function getDays(): array
    {
        return $this->days;
    }

    /**
     * @param OpeningHoursDay[] $days
     */
    public function setDays(array $days): void
    {
        $this->days = $days;
    }

    /**
     * @return \DateTime
     */
    public function getFrom(): \DateTime
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
     * @return \DateTime
     */
    public function getTill(): \DateTime
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
