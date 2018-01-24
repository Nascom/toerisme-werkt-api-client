<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Response\Tags;

use Nascom\ToerismeWerktApiClient\Model\Tag;
use Nascom\ToerismeWerktApiClient\Response\Tags\ListTagsResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ListTagsResponseDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Response\Facilities
 */
class ListTagsResponseDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $tags = $this->denormalizer->denormalize(
            $data['data'],
            Tag::class . '[]'
        );

        return new ListTagsResponse(
            $tags,
            $data['links'] ?? []
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == ListTagsResponse::class;
    }
}
