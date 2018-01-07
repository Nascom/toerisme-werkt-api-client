<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Location;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class LocationDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates
 */
class LocationDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        return new Location(
            (float) ($data['latitude'] ?? 0.0),
            (float) ($data['longitude'] ?? 0.0)
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Location::class;
    }

}
