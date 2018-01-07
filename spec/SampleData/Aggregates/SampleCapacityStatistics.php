<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates;

use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleData;

/**
 * Class SampleCapacityStatistics
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates
 */
class SampleCapacityStatistics extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'totaalAantalEenheden' => 4,
            'totaalCapaciteit' => 12
        ];
    }
}
