<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Response\TouristicProducts;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProductListView;
use Nascom\ToerismeWerktApiClient\Response\TouristicProducts\ListTouristicProductsResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ListTouristicProductsResponseDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Response\TouristicProducts
 */
class ListTouristicProductsResponseDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $products = $this->denormalizer->denormalize(
            $data['data'],
            TouristicProductListView::class . '[]'
        );

        return new ListTouristicProductsResponse(
            $products,
            $data['links'] ?? []
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == ListTouristicProductsResponse::class;
    }
}
