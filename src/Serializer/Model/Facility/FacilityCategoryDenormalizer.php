<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Facility;

use Nascom\ToerismeWerktApiClient\Model\Facility\FacilityCategory;
use Nascom\ToerismeWerktApiClient\Serializer\DataPropertyDenormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class FacilityCategoryDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Facility
 */
class FacilityCategoryDenormalizer implements
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
        dump($data);
        $data = $this->mapDataPropertyTo($data, 'parent', FacilityCategory::class);
        return $this->denormalizer->denormalize($data, $class);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == FacilityCategory::class
            && isset($data['parent'])
            && is_array($data['parent']);
    }
}
