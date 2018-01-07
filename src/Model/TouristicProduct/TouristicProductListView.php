<?php

namespace Nascom\ToerismeWerktApiClient\Model\TouristicProduct;

/**
 * Class TouristicProductListView
 *
 * @package Nascom\ToerismeWerktApiClient\Model\TouristicProduct
 */
class TouristicProductListView
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \DateTime
     */
    private $lastModified;

    /**
     * @var string
     */
    private $link;

    /**
     * TouristicProductListView constructor.
     *
     * @param string $id
     * @param string $type
     * @param \DateTime $lastModified
     */
    public function __construct
    (
        string $id,
        string $type,
        \DateTime $lastModified,
        string $link
    )
    {
        $this->id = $id;
        $this->type = $type;
        $this->lastModified = $lastModified;
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return \DateTime
     */
    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }
}
