<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class ForeignLanguageDescription
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class ForeignLanguageDescription
{
    /**
     * @var string|null
     */
    private $labelTitle;

    /**
     * @var string|null
     */
    private $labelDescription;

    /**
     * @var string|null
     */
    private $language;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @return null|string
     */
    public function getLabelTitle(): ?string
    {
        return $this->labelTitle;
    }

    /**
     * @param null|string $labelTitle
     */
    public function setLabelTitle(?string $labelTitle): void
    {
        $this->labelTitle = $labelTitle;
    }

    /**
     * @return null|string
     */
    public function getLabelDescription(): ?string
    {
        return $this->labelDescription;
    }

    /**
     * @param null|string $labelDescription
     */
    public function setLabelDescription(?string $labelDescription): void
    {
        $this->labelDescription = $labelDescription;
    }

    /**
     * @return null|string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param null|string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
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
}
