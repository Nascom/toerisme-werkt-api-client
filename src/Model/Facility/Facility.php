<?php

namespace Nascom\ToerismeWerktApiClient\Model\Facility;

/**
 * Class Facility
 *
 * @package Nascom\ToerismeWerktApiClient\Model
 */
class Facility
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var FacilityCategory|null
     */
    private $category;

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
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return FacilityCategory|null
     */
    public function getCategory(): ?FacilityCategory
    {
        return $this->category;
    }

    /**
     * @param FacilityCategory|null $category
     */
    public function setCategory(?FacilityCategory $category): void
    {
        $this->category = $category;
    }
}
