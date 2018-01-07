<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Response;

use Nascom\ToerismeWerktApiClient\Model\Error;
use Nascom\ToerismeWerktApiClient\Response\ErrorResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ErrorResponseDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Response
 */
class ErrorResponseDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $errors = $this->denormalizer->denormalize(
            $data['errors'],
            Error::class . '[]'
        );

        return new ErrorResponse($errors);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return !empty($data['errors']);
    }
}
