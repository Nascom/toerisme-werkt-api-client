<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model;

use Nascom\ToerismeWerktApiClient\Model\Error;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ErrorDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model
 */
class ErrorDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        return new Error(
            $data['title'] ?? '',
            $data['detail'] ?? ''
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Error::class;
    }
}
