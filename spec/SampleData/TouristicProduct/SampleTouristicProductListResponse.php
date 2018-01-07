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
                [
                    'id' => 'TouristicProduct-00001',
                    'type' => 'touristicproduct',
                    'attributes' => [
                        'lastModified' => '2018-01-04T11:03:40+01:00'
                    ],
                    'links' => [
                        'self' => 'https://api.toerismewerkt.be/api/v2/touristicproducts/TouristicProduct-00001'
                    ]
                ],
                [
                    'id' => 'TouristicProduct-00002',
                    'type' => 'touristicproduct',
                    'attributes' => [
                        'lastModified' => '2018-01-04T11:03:40+01:00'
                    ],
                    'links' => [
                        'self' => 'https://api.toerismewerkt.be/api/v2/touristicproducts/TouristicProduct-00002'
                    ]
                ]
            ],
        ];
    }
}
