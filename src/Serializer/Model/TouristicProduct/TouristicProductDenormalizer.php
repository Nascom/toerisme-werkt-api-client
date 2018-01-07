<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Address;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Location;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Prices;
use Nascom\ToerismeWerktApiClient\Model\Region;
use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\Attributes;
use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Serializer\DataPropertyDenormalizer;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class TouristicProductDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct
 */
class TouristicProductDenormalizer implements
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
            'address' => Address::class,
            'location' => Location::class,
            'prices' => Prices::class,
            'region' => Region::class
        ];
        $attributes = $this->mapDataProperties($data['attributes'], $mapping);
        $data += $attributes;

        return TouristicProduct::fromArray($data);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == TouristicProduct::class;
    }
}
