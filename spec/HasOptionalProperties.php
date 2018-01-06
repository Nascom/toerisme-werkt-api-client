<?php

namespace spec\Nascom\ToerismeWerktApiClient;

/**
 * Trait HasOptionalProperties
 *
 * @package spec\Nascom\ToerismeWerktApiClient
 */
trait HasOptionalProperties
{
    /**
     * @param string $property
     */
    protected function checkIfPropertyIsOptional(string $property): void
    {
        $getter = 'get' . ucfirst($property);
        $this->$getter()->shouldBeNull();
    }
}
