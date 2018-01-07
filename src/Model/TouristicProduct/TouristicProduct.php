<?php

namespace Nascom\ToerismeWerktApiClient\Model\TouristicProduct;

/**
 * Class TouristicProduct
 *
 * @package Nascom\ToerismeWerktApiClient\Model\TouristicProduct
 */
class TouristicProduct
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $id;

    /**
     * @var Attributes
     */
    private $attributes;

    /**
     * TouristicProduct constructor.
     *
     * @param string $type
     * @param string $id
     * @param Attributes $attributes
     */
    public function __construct
    (
        string $type,
        string $id,
        Attributes $attributes
    )
    {
        $this->type = $type;
        $this->id = $id;
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return Attributes
     */
    public function getAttributes(): Attributes
    {
        return $this->attributes;
    }
}
