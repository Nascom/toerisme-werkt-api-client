<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct;

use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleData;


/**
 * Class SampleTouristicProductResponse
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct
 */
class SampleTouristicProductResponse extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'links' => [
                'self' => 'http://foo.bar/api/v2/touristicproducts/TouristicProduct-00000',
            ],
            'data' => SampleTouristicProduct::asArray(),
            'relationships' => []
        ];
    }
}
