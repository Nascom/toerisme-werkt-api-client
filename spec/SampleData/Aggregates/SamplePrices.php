<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates;

use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleData;

/**
 * Class SamplePrices
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates
 */
class SamplePrices extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'individueleTarieven' => '12,34',
            'groepsTarieven' => '23,45',
            'gemiddeldeRichtPrijsVolwassenPersoon' => '34,56'
        ];
    }
}
