<?php

namespace Nascom\ToerismeWerktApiClient\Model\TouristicProduct;
use Nascom\ToerismeWerktApiClient\Model\ArrayInstantiatable;

/**
 * Class TouristicProductListView
 *
 * @package Nascom\ToerismeWerktApiClient\Model\TouristicProduct
 */
class TouristicProductListView
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
     * @return TouristicProductListView
     */
    public static function fromArray(array $data): self
    {
        $listView = new static;
        $listView->setPropertiesFromArray($data);
        $listView->attributes = Attributes::fromArray($listView->attributes ?: []);

        return $listView;
    }
}