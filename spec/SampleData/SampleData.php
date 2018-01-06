<?php

namespace spec\Nascom\ToerismeWerktApiClient\SampleData;

/**
 * Class SampleData
 *
 * @package spec\Nascom\ToerismeWerktApiClient\SampleData
 */
abstract class SampleData
{
    /**
     * @return array
     */
    abstract public static function asArray(): array;

    /**
     * @return string
     */
    public static function asJson(): string
    {
        return json_encode(static::asArray());
    }

    /**
     * @param string $property
     * @return array
     */
    public static function without(string $property): array
    {
        $data = static::asArray();
        unset($data[$property]);

        return $data;
    }
}
