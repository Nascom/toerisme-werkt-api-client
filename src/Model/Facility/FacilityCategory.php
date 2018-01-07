<?php

namespace Nascom\ToerismeWerktApiClient\Model\Facility;

/**
 * Class FacilityCategory
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Facility
 */
class FacilityCategory
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var FacilityCategory|null
     */
    private $parent;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return FacilityCategory|null
     */
    public function getParent(): ?FacilityCategory
    {
        return $this->parent;
    }

    /**
     * @param FacilityCategory|null $parent
     */
    public function setParent(?FacilityCategory $parent): void
    {
        $this->parent = $parent;
    }
}
