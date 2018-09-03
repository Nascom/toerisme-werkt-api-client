<?php

namespace Nascom\ToerismeWerktApiClient\Model\Aggregates;

/**
 * Class SocialMediaLink
 *
 * @package Nascom\ToerismeWerktApiClient\Model\Aggregates
 */
class SocialMediaLink
{
    public const TWITTER = 'Twitter';
    public const FACEBOOK = 'Facebook';
    public const INSTAGRAM = 'Instagram';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $link;

    /**
     * SocialMediaLink constructor.
     *
     * @param string $name
     * @param string $link
     */
    public function __construct(string $name, string $link)
    {
        $this->name = $name;
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }
}
