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

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        // We'll disregard the category for now. @todo.
        $data['description'] = $data['attributes']['description'];
        unset($data['attributes']);

        return $this->denormalizer->denormalize($data, $class);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Facility::class && isset($data['attributes']);
    }
}
