<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Address;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\CapacityPrices;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\CapacityStatistics;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Chain;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\CheckInTime;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\ClosingPeriod;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\ForeignLanguageDescription;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\HolidayOpeningHours;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Image;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Location;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\OpeningHours;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Prices;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\SocialMediaLink;
use Nascom\ToerismeWerktApiClient\Model\AttractionCategory;
use Nascom\ToerismeWerktApiClient\Model\Facility\Facility;
use Nascom\ToerismeWerktApiClient\Model\Region;
use Nascom\ToerismeWerktApiClient\Model\Tag;
use Nascom\ToerismeWerktApiClient\Model\TouristicProduct\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Serializer\DataPropertyDenormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class TouristicProductDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\TouristicProduct
 */
class TouristicProductDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use DataPropertyDenormalizer;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $mapping = [
            'address' => Address::class,
            'location' => Location::class,
            'prices' => Prices::class,
            'region' => Region::class,
            'capacityPrices' => CapacityPrices::class,
            'capacityStatistics' => CapacityStatistics::class,
            'chain' => Chain::class,
            'lastModified' => \DateTime::class,
            'tags' => Tag::class . '[]',
            'checkinTimes' => CheckInTime::class . '[]',
            'foreignLanguageDescriptions' => ForeignLanguageDescription::class . '[]',
            'images' => Image::class . '[]',
            'facilities' => Facility::class . '[]',
            'attractionCategories' => AttractionCategory::class . '[]',
            'openingHours' => OpeningHours::class . '[]',
            'closingPeriods' => ClosingPeriod::class . '[]',
            'holidaysOpeningHours' => HolidayOpeningHours::class . '[]',
            'socialMedias' => SocialMediaLink::class . '[]'
        ];
        $attributes = $this->mapDataProperties($data['attributes'], $mapping);
        unset($data['attributes']);
        $data += $attributes;

        return $this->denormalizer->denormalize($data, TouristicProduct::class);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == TouristicProduct::class && !empty($data['attributes']);
    }
}
