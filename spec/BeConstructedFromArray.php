<?php

namespace spec\Nascom\ToerismeWerktApiClient;

/**
 * Trait BeConstructedFromArray
 *
 * @package spec\Nascom\ToerismeWerktApiClient
 */
trait BeConstructedFromArray
{
    /**
     * @param array $data
     */
    protected function beConstructedFromArray(array $data): void
    {
        $this->beConstructedThrough('fromArray', [$data]);
    }
}
