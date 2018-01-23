<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\OpeningHours;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\OpeningHoursDay;
use Nascom\ToerismeWerktApiClient\Serializer\DataPropertyDenormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class OpeningHoursDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates
 */
class OpeningHoursDenormalizer implements
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
            'days' => OpeningHoursDay::class . '[]',
            'from' => \DateTime::class,
            'till' => \DateTime::class
        ];
        $data = $this->mapDataProperties($data, $mapping);

        $openingHours = new OpeningHours();
        $openingHours->setDays($data['days']);
        $openingHours->setFrom($data['from']);
        $openingHours->setTill($data['till']);

        return $openingHours;
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == OpeningHours::class;
    }
}
