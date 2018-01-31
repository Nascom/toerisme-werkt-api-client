<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Response\Regions;

use Nascom\ToerismeWerktApiClient\Model\Region;
use Nascom\ToerismeWerktApiClient\Response\Regions\ListRegionsResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ListRegionsResponseDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Response\Regions
 */
class ListRegionsResponseDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $regions = $this->denormalizer->denormalize(
            $data['data'],
            Region::class . '[]'
        );

        return new ListRegionsResponse(
            $regions,
            $data['links'] ?? []
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == ListRegionsResponse::class;
    }
}
