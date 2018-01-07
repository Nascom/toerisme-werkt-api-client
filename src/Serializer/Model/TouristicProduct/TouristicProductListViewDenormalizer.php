<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProductListView;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class TouristicProductListViewDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct
 */
class TouristicProductListViewDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        return new TouristicProductListView(
            $data['id'],
            $data['type'],
            new \DateTime($data['attributes']['lastModified']),
            $data['links']['self']
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == TouristicProductListView::class;
    }
}
