<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData;

/**
 * Class SampleAddress
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData
 */
class SampleAddress extends SampleData
{
    /**
     * @inheritdoc
     */
    public static function asArray(): array
    {
        return [
            'street' => 'Some street',
            'houseNumber' => '34',
            'postalCode' => '9000',
            'municipality' => 'Genk'
        ];
    }
}
