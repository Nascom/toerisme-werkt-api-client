<?php

namespace Nascom\ToerismeWerktApiClient\Serializer;

/**
 * Trait ArrayKeyMapper
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer
 */
trait ArrayKeyMapper
{
    /**
     * Changes the values of the given array keys according to the provided
     * mapping.
     *
     * @param array $mapping
     *   Maps the old keys (keys) to the desired new keys (values).
     * @param array $array
     * @return array
     */
    public function mapArrayKeys(array $mapping, array $array): array
    {
        $newArray = [];
        foreach ($array as $key => $value) {
            $newArray[$mapping[$key] ?? $key] = $value;
        }

        return $newArray;
    }
}
