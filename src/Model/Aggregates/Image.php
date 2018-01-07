<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class Image
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class Image
{
    /**
     * @var string|null
     */
    private $touristicProductImageId;

    /**
     * @var string|null
     */
    private $caption;

    /**
     * @var string|null
     */
    private $small;

    /**
     * @var string|null
     */
    private $medium;

    /**
     * @var string|null
     */
    private $large;

    /**
     * @var bool
     */
    private $isPrimary = false;

    /**
     * @var bool
     */
    private $isLogo = false;

    /**
     * @return null|string
     */
    public function getTouristicProductImageId(): ?string
    {
        return $this->touristicProductImageId;
    }

    /**
     * @param null|string $touristicProductImageId
     */
    public function setTouristicProductImageId(?string $touristicProductImageId): void
    {
        $this->touristicProductImageId = $touristicProductImageId;
    }

    /**
     * @return null|string
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param null|string $caption
     */
    public function setCaption(?string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @return null|string
     */
    public function getSmall(): ?string
    {
        return $this->small;
    }

    /**
     * @param null|string $small
     */
    public function setSmall(?string $small): void
    {
        $this->small = $small;
    }

    /**
     * @return null|string
     */
    public function getMedium(): ?string
    {
        return $this->medium;
    }

    /**
     * @param null|string $medium
     */
    public function setMedium(?string $medium): void
    {
        $this->medium = $medium;
    }

    /**
     * @return null|string
     */
    public function getLarge(): ?string
    {
        return $this->large;
    }

    /**
     * @param null|string $large
     */
    public function setLarge(?string $large): void
    {
        $this->large = $large;
    }

    /**
     * @return bool
     */
    public function isPrimary(): bool
    {
        return $this->isPrimary;
    }

    /**
     * @param bool $isPrimary
     */
    public function setIsPrimary(bool $isPrimary): void
    {
        $this->isPrimary = $isPrimary;
    }

    /**
     * @return bool
     */
    public function isLogo(): bool
    {
        return $this->isLogo;
    }

    /**
     * @param bool $isLogo
     */
    public function setIsLogo(bool $isLogo): void
    {
        $this->isLogo = $isLogo;
    }
}
