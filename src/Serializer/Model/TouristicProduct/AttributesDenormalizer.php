<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Address;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Location;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Prices;
use Nascom\ToerismeWerktApiClient\Model\Region;
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
        $data = $this->mapDataTo($data, 'address', Address::class);
        $data = $this->mapDataTo($data, 'location', Location::class);
        $data = $this->mapDataTo($data, 'prices', Prices::class);
        $data = $this->mapDataTo($data, 'region', Region::class);

        return Attributes::fromArray($data);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Attributes::class;
    }

    /**
     * @param array $data
     * @param string $key
     * @param string $target
     * @return array
     */
    private function mapDataTo(array $data, string $key, string $target): array
    {
        if (!isset($data[$key])) {
            return $data;
        }

        $data[$key] = $this->denormalizer->denormalize(
            $data[$key],
            $target
        );

        return $data;
    }
}
