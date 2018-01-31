<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\HolidayOpeningHours;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Period;
use Nascom\ToerismeWerktApiClient\Serializer\DataPropertyDenormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class HolidayOpeningHoursDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates
 */
class HolidayOpeningHoursDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use DataPropertyDenormalizer;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $mapping = [
            'hours' => Period::class,
            'from' => \DateTime::class,
            'till' => \DateTime::class
        ];
        $data = $this->mapDataProperties($data, $mapping);

        $openingHours = new HolidayOpeningHours();
        $openingHours->setHours($data['hours']);
        $openingHours->setFrom($data['from']);
        $openingHours->setTill($data['till']);
        $openingHours->setName($data['name']);

        return $openingHours;
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == HolidayOpeningHours::class;
    }
}
