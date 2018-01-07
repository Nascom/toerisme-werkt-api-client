<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model;

use Nascom\ToerismeWerktApiClient\Model\Region;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class RegionDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model
 */
class RegionDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        return new Region($data['id'], $data['name']);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Region::class;
    }
}
