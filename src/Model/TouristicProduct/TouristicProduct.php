<?php

namespace Nascom\ToerismeWerktApiClient\Model\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Model\ArrayInstantiatable;

/**
 * Class TouristicProduct
 *
 * @package Nascom\ToerismeWerktApiClient\Model\TouristicProduct
 */
class TouristicProduct
{
    use ArrayInstantiatable;

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
     * @param array $data
     * @return TouristicProduct
     */
    public static function fromArray(array $data): self
    {
        $listView = new static;
        $listView->setPropertiesFromArray($data);
        $listView->attributes = Attributes::fromArray($listView->attributes ?: []);

        return $listView;
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
