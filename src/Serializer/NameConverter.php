<?php

namespace Nascom\ToerismeWerktApiClient\Serializer;

use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

/**
 * Class NameConverter
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer
 */
class NameConverter implements NameConverterInterface
{
    private $mapping = [
        // Prices
        'jaarlijks' => 'yearlyPrices',
        'individueleTarieven' => 'individualPrices',
        'groepsTarieven' => 'groupPrices',
        'gemiddeldeRichtPrijsVolwassenPersoon' => 'averagePriceAdult',

        // CapacityStatistics
        'totaalAantalEenheden' => 'totalNumberOfUnits',
        'totaalCapaciteit' => 'totalCapacity',

        // CheckInTimes
        'checkinTimes' => 'checkInTimes',
        'inCheckenVanaf' => 'checkInStarting',
        'uitCheckenTot' => 'checkOutUltimatelyAt',

        // Closing periods
        'startDatum' => 'startDate',
        'eindDatum' => 'endDate',
        'opmerking' => 'remarks',
        'openingHoursRemark' => 'openingHoursRemarks',

        // Foreign language description
        'label_title' => 'labelTitle',
        'label_description' => 'labelDescription',

        // Other
        'comfortclassificatie' => 'comfortClassification',
        'BTW' => 'vat',
        'holidaysOpeningHours' => 'holidayOpeningHours'
    ];

    /**
     * @inheritdoc
     */
    public function normalize($propertyName)
    {
        return array_flip($this->mapping)[$propertyName] ?? $propertyName;
    }

    /**
     * @inheritdoc
     */
    public function denormalize($propertyName)
    {
        return $this->mapping[$propertyName] ?? $propertyName;
    }
}
