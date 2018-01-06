<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct;

use spec\Nascom\ToerismeWerktApiClient\SampleData\SampleData;


/**
 * Class SampleTouristicProductListView
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData\TouristicProduct
 */
class SampleTouristicProductListResponse extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'links' => [
                'self' => 'http://foo.bar/api/v2/touristicproducts/',
                'next' => 'http://foo.bar/api/v2/touristicproducts/?page[offset]=4',
                'last' => 'http://foo.bar/api/v2/touristicproducts/?page[offset]=8',
                'prev' => 'http://foo.bar/api/v2/touristicproducts/?page[offset]=2',
                'first' => 'http://foo.bar/api/v2/touristicproducts/?page[offset]=1',
            ],
            'data' => [
                SampleTouristicProductListView::asArray(),
                SampleTouristicProductListView::asArray()
            ]
        ];
    }
}
