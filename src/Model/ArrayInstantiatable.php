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
}