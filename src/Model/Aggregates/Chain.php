<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class Chain
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class Chain
{
    /**
     * @var bool
     */
    private $isMember;

    /**
     * Chain constructor.
     *
     * @param bool $isMember
     */
    public function __construct(bool $isMember = false)
    {
        $this->isMember = $isMember;
    }

    /**
     * @return bool
     */
    public function isMember(): bool
    {
        return $this->isMember;
    }
}
