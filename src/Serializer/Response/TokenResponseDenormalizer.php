<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Response;

use Nascom\ToerismeWerktApiClient\Exception\MalformedResponseDataException;
use Nascom\ToerismeWerktApiClient\Response\TokenResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class TokenResponseDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Response
 */
class TokenResponseDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (empty($data['meta']['token'])) {
            throw new MalformedResponseDataException(
                'Token not present in the response data.'
            );
        }

        return new TokenResponse($data['meta']['token']);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == TokenResponse::class;
    }
}
