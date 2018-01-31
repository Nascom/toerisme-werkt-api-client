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
        $id = $data['id'] ?? '';
        $name = $data['attributes']['name'] ?? $data['name'] ?? '';

        return new Region($id, $name);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Region::class;
    }
}
