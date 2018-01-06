<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates;

use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleData;

/**
 * Class SampleLocation
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates
 */
class SampleLocation extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'longitude' => 43.21,
            'latitude' => 12.34
        ];
    }
}
