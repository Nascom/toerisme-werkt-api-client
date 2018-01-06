<?php

namespace Nascom\ToerismeWerktApiClient\Model;

/**
 * Trait FromArray
 *
 * @package Nascom\ToerismeWerktApiClient\Model
 */
trait ArrayInstantiatable
{
    /**
     * @param array $data
     */
    protected function setPropertiesFromArray(array $data): void
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * The given mapping array should map the api property names (keys) to the
     * desired property names (values). This will then return a new data array
     * with the new property names as keys.
     *
     * @param array $mapping
     * @param array $data
     * @return array
     */
    protected function mapData(array $mapping, array $data): array
    {
        $mappedData = [];
        foreach ($mapping as $apiName => $desiredName) {
            if (isset($data[$apiName])) {
                $mappedData[$desiredName] = $data[$apiName];
            }
        }

        return $mappedData;
    }
}
