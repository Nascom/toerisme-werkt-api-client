<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct;

use spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates\SampleAddress;
use spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates\SamplePrices;
use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleData;
use spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates\SampleLocation;
use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleRegion;

/**
 * Class SampleAttributes
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct
 */
class SampleAttributes extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'touristicProductType' => 'hotel',
            'title' => 'Heidezicht',
            'description' => 'Een hotel met zicht op de heide',
            'address' => SampleAddress::asArray(),
            'location' => SampleLocation::asArray(),
            'image' => 'http://foo.bar/image.jpg​',
            'lastModified' => '2016-07-26T23:59:59Z',
            'closingPeriods' => [],
            'prices' => SamplePrices::asArray(),
            'region' => SampleRegion::asArray()
        ];
    }
}
