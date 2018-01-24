<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model;

use Nascom\ToerismeWerktApiClient\Model\Tag;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class TagDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model
 */
class TagDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $tag = new Tag();
        $tag->setId($data['id']);
        $tag->setName($data['attributes']['name']);
        $tag->setCategory($data['attributes']['category']);

        return $tag;
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Tag::class;
    }
}
