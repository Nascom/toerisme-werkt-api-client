<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\Attributes;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class AttributesDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct
 */
class AttributesDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        return new Attributes();
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Attributes::class;
    }
}
