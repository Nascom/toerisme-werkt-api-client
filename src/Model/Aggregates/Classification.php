<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class Classification
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class Classification
{
    /**
     * @var int
     */
    private $rating;

    /**
     * Classification constructor.
     *
     * @param int $rating
     */
    public function __construct(int $rating)
    {
        $this->rating = $rating;
    }

    /**
     * @param string $classification
     * @return Classification
     */
    public static function fromString(string $classification): self
    {
        return new static(strlen(trim($classification)));
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return str_repeat('*', $this->rating);
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }
}
