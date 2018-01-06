<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct;

use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleData;

/**
 * Class SampleTouristicProductListView
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct
 */
class SampleTouristicProductListView extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'type' => 'touristicproduct',
            'id' => 'TouristicProduct-000000-0000-00-000-00000',
            'attributes' => SampleAttributes::asArray(),
            'links' => [
                'self' => 'http://foo.bar/api/v2/touristicproducts/TouristicProduct-000000-0000-00-000-00000'
            ]
        ];
    }
}
