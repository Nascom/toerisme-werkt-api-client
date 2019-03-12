<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\CapacityStatistics;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class CapacityStatisticsDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates
 */
class CapacityStatisticsDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = NULL, array $context = [])
    {
        $capacityStatistics = new CapacityStatistics();
        $intOrNull = function (string $key) use ($data):  ?int {
            return !empty($data[$key])
                ? (int) $data[$key]
                : NULL;
        };
        $capacityStatistics->setTotalCapacity($intOrNull('maximumCapacity'));
        $capacityStatistics->setTotalNumberOfUnits($intOrNull('numberOfUnits'));

        return $capacityStatistics;
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = NULL)
    {
        return $type == CapacityStatistics::class;
    }
}
