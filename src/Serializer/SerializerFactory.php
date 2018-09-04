<?php

namespace Nascom\ToerismeWerktApiClient\Serializer;

use Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates\CapacityStatisticsDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates\HolidayOpeningHoursDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates\OpeningHoursDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\AttractionCategoryDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\Facility\FacilityCategoryDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\Facility\FacilityDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\RegionDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\TagDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct\TouristicProductDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct\TouristicProductListViewDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\AttractionCategories\ListAttractionCategoriesResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\ErrorResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\Regions\ListRegionsResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\Tags\ListTagsResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\TokenResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\Facilities\ListFacilitiesResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\TouristicProducts\ListTouristicProductsResponseDenormalizer;
use Nascom\ToerismeWerktApiClient\Serializer\Response\TouristicProducts\TouristicProductResponseDenormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
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

            // Responses.
            new TokenResponseDenormalizer(),
            new ListTouristicProductsResponseDenormalizer(),
            new TouristicProductResponseDenormalizer(),
            new ListFacilitiesResponseDenormalizer(),
            new ListTagsResponseDenormalizer(),
            new ListRegionsResponseDenormalizer(),
            new ListAttractionCategoriesResponseDenormalizer(),

            // Models.
            new TouristicProductDenormalizer(),
            new TouristicProductListViewDenormalizer(),
            new FacilityDenormalizer(),
            new FacilityCategoryDenormalizer(),
            new OpeningHoursDenormalizer(),
            new TagDenormalizer(),
            new CapacityStatisticsDenormalizer(),
            new RegionDenormalizer(),
            new HolidayOpeningHoursDenormalizer(),
            new AttractionCategoryDenormalizer(),


            // Symfony normalizers to handle the rest.
            new DateTimeNormalizer(),
            new ArrayDenormalizer(),
            new ObjectNormalizer(null, new NameConverter())
        ];

        $encoders = [
            new JsonEncoder()
        ];

        return new Serializer($normalizers, $encoders);
    }
}
