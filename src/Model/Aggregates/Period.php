<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class Period
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class Period
{
    /**
     * @var string
     */
    private $from = '';

    /**
     * @var string
     */
    private $till = '';

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
