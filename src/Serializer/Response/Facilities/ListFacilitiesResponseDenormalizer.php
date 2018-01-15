<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Response\Facilities;

use Nascom\ToerismeWerktApiClient\Model\Facility\Facility;
use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProductListView;
use Nascom\ToerismeWerktApiClient\Response\Facilities\ListFacilitiesResponse;
use Nascom\ToerismeWerktApiClient\Response\TouristicProducts\ListTouristicProductsResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ListFacilitiesResponseDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Response\Facilities
 */
class ListFacilitiesResponseDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $facilities = $this->denormalizer->denormalize(
            $data['data'],
            Facility::class . '[]'
        );

        return new ListFacilitiesResponse(
            $facilities,
            $data['links'] ?? []
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == ListFacilitiesResponse::class;
    }
}
