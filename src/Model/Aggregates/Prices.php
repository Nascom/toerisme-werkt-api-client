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
     * @param array $data
     * @return Prices
     */
    public static function fromArray(array $data): self
    {
        $prices = new static;
        $mapping = [
            'individueleTarieven' => 'individualPrices',
            'groepsTarieven' => 'groupPrices',
            'gemiddeldeRichtPrijsVolwassenPersoon' => 'averagePriceAdult'
        ];
        $data = $prices->mapData($mapping, $data);
        $prices->setPropertiesFromArray($data);

        return $prices;
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
