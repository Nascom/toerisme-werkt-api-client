<?php

namespace Nascom\ToerismeWerktApiClient\Serializer;

use Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates\AddressDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates\LocationDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates\PricesDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\ErrorDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\RegionDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct\AttributesDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct\TouristicProductDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\ErrorResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\TokenResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\TouristicProducts\ListTouristicProductsResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\TouristicProducts\TouristicProductResponseDenormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class SerializerFactory
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer
 */
class SerializerFactory
{
    /**
     * @return Serializer
     */
    public static function create(): Serializer
    {
        $normalizers = [
            // We'll put this first so it'll have priority.
            new ErrorResponseDenormalizer(),
            new ArrayDenormalizer(),

            // Responses
            new TokenResponseDenormalizer(),
            new ListTouristicProductsResponseDenormalizer(),
            new TouristicProductResponseDenormalizer(),

            // Models
            new ErrorDenormalizer(),
            new TouristicProductDenormalizer(),
            new AttributesDenormalizer(),
            new RegionDenormalizer(),

            // Aggregates
            new AddressDenormalizer(),
            new LocationDenormalizer(),
            new PricesDenormalizer(),
        ];

        $encoders = [
            new JsonEncoder()
        ];

        return new Serializer($normalizers, $encoders);
    }
}
