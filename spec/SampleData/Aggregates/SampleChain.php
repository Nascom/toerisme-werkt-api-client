<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData\Aggregates;

use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleData;

class SampleChain extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'isLid' => true
        ];
    }
}
