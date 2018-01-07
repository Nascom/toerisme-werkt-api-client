<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Facility;

use Nascom\ToerismeWerktApiClient\Model\Facility\Facility;
use Nascom\ToerismeWerktApiClient\Model\Facility\FacilityCategory;
use Nascom\ToerismeWerktApiClient\Serializer\DataPropertyDenormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class FacilityDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Facility
 */
class FacilityDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use DataPropertyDenormalizer;

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $data = $this->mapDataPropertyTo($data, 'category', FacilityCategory::class);
        return $this->denormalizer->denormalize($data, $class);
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Facility::class
            && isset($data['category'])
            && is_array($data['category']);
    }
}
