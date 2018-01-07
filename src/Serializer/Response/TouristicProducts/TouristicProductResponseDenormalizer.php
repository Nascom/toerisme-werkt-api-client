<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Response\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Response\TouristicProducts\TouristicProductResponse;
use Symfony\Component\Serializer\Exception\ExtraAttributesException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class TouristicProductResponseDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Response\TouristicProducts
 */
class TouristicProductResponseDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $touristicProduct = $this->denormalizer->denormalize(
            $data['data'],
            TouristicProduct::class
        );

        return new TouristicProductResponse(
            $touristicProduct,
            $data['relationships'] ?? [],
            $data['links'] ?? []
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == TouristicProductResponse::class;
    }
}
