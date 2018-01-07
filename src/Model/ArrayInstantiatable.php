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
     * @return self
     */
    public static function fromArray(array $data): self
    {
        $self = new static;
        foreach ($data as $key => $value) {
            if (property_exists($self, $key)) {
                $self->{$key} = $value;
            }
        }

        return $self;
    }
}
