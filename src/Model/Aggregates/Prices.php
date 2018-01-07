<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\ArrayInstantiatable;

/**
 * Class Prices
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class Prices
{
    use ArrayInstantiatable;

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
     * Prices constructor.
     *
     * @param null|string $individualPrices
     * @param null|string $groupPrices
     * @param null|string $averagePriceAdult
     */
    public function __construct
    (
        ?string $individualPrices,
        ?string $groupPrices,
        ?string $averagePriceAdult
    )
    {
        $this->individualPrices = $individualPrices;
        $this->groupPrices = $groupPrices;
        $this->averagePriceAdult = $averagePriceAdult;
    }

    /**
     * @return null|string
     */
    public function getIndividualPrices(): ?string
    {
        return $this->individualPrices;
    }

    /**
     * @return null|string
     */
    public function getGroupPrices(): ?string
    {
        return $this->groupPrices;
    }

    /**
     * @return null|string
     */
    public function getAveragePriceAdult(): ?string
    {
        return $this->averagePriceAdult;
    }
}
