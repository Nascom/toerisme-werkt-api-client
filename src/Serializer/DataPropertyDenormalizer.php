<?php

namespace Nascom\ToerismeWerktApiClient\Serializer;

/**
 * Trait DataPropertyDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer
 */
trait DataPropertyDenormalizer
{
    /**
     * @param array $data
     * @param string $key
     * @param string $target
     * @return array
     */
    protected function mapDataPropertyTo(array $data, string $key, string $target): array
    {
        if (!isset($data[$key])) {
            return $data;
        }

        $data[$key] = $this->denormalizer->denormalize(
            $data[$key],
            $target
        );

        return $data;
    }

    /**
     * @param array $data
     * @param array $mapping
     * @return array
     */
    protected function mapDataProperties(array $data, array $mapping): array
    {
        foreach ($mapping as $key => $targetClass) {
            $data = $this->mapDataPropertyTo($data, $key, $targetClass);
        }

        return $data;
    }
}
