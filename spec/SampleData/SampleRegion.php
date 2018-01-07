<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData;

/**
 * Class SampleRegion
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData
 */
class SampleRegion extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'id' => 'Region-000000',
            'name' => 'A Region'
        ];
    }
}
