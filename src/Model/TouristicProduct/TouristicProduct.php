<?php

namespace Nascom\ToerismeWerktApiClient\Model\TouristicProduct;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Address;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\CapacityStatistics;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Chain;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\CheckInTime;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Classification;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\ForeignLanguageDescription;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Image;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Location;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\OpeningHours;
use Nascom\ToerismeWerktApiClient\Model\Aggregates\Prices;
use Nascom\ToerismeWerktApiClient\Model\Facility\Facility;
use Nascom\ToerismeWerktApiClient\Model\Region;
use Nascom\ToerismeWerktApiClient\Model\Tag;

/**
 * Class TouristicProduct
 *
 * @package Nascom\ToerismeWerktApiClient\Model
 */
class TouristicProduct
{
    /**
     * @todo add the following:
     * - holidayOpeningHours
     * - attractionCategories
     * - sightCategories
     * - miceCategories
     */

    /**
     * @var OpeningHours[]
     */
    private $openingHours;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string|null
     */
    private $touristicProductType;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var Address
     */
    private $address;

    /**
     * @var Location
     */
    private $location;

    /**
     * @var string|null
     */
    private $image;

    /**
     * @var \DateTime
     */
    private $lastModified;

    /**
     * @var Prices
     */
    private $prices;

    /**
     * @var Region
     */
    private $region;

    /**
     * @var CapacityStatistics
     */
    private $capacityStatistics;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var Chain
     */
    private $chain;

    /**
     * @var Classification|null
     */
    private $comfortClassification;

    /**
     * @var Tag[]
     */
    private $tags = [];

    /**
     * @var CheckInTime[]
     */
    private $checkInTimes = [];

    /**
     * @var bool
     */
    private $onlineReservationPossible = false;

    /**
     * @var ForeignLanguageDescription[]
     */
    private $foreignLanguageDescriptions = [];

    /**
     * @var string|null
     */
    private $vat;

    /**
     * @var int|null
     */
    private $distanceToClosestWalkNetwork;

    /**
     * @var int|null
     */
    private $distanceToPublicTransport;

    /**
     * @var int|null
     */
    private $betweenNodes1;

    /**
     * @var int|null
     */
    private $betweenNodes2;

    /**
     * @var Image[]
     */
    private $images = [];

    /**
     * @var string|null
     */
    private $productType;

    /**
     * @var string[]
     */
    private $videoLinks = [];

    /**
     * @var Facility[]
     */
    private $facilities = [];

    /**
     * @var int|null
     */
    private $stdId;

    /**
     * @var string|null
     */
    private $website;

    /**
     * @var string|null
     */
    private $mobile;

    /**
     * @var string|null
     */
    private $telephone;

    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * TouristicProduct constructor.
     */
    public function __construct()
    {
        // Initialize default aggregates.
        $this->prices = new Prices();
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

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
    public function getTouristicProductType(): ?string
    {
        return $this->touristicProductType;
    }

    /**
     * @param null|string $touristicProductType
     */
    public function setTouristicProductType(?string $touristicProductType): void
    {
        $this->touristicProductType = $touristicProductType;
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

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return null|string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param null|string $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return \DateTime
     */
    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    /**
     * @param \DateTime $lastModified
     */
    public function setLastModified(\DateTime $lastModified): void
    {
        $this->lastModified = $lastModified;
    }

    /**
     * @return Prices
     */
    public function getPrices(): Prices
    {
        return $this->prices;
    }

    /**
     * @param Prices $prices
     */
    public function setPrices(Prices $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * @return Region
     */
    public function getRegion(): Region
    {
        return $this->region;
    }

    /**
     * @param Region $region
     */
    public function setRegion(Region $region): void
    {
        $this->region = $region;
    }

    /**
     * @return CapacityStatistics
     */
    public function getCapacityStatistics(): CapacityStatistics
    {
        return $this->capacityStatistics;
    }

    /**
     * @param CapacityStatistics $capacityStatistics
     */
    public function setCapacityStatistics(CapacityStatistics $capacityStatistics): void
    {
        $this->capacityStatistics = $capacityStatistics;
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
     * @return Chain
     */
    public function getChain(): Chain
    {
        return $this->chain;
    }

    /**
     * @param Chain $chain
     */
    public function setChain(Chain $chain): void
    {
        $this->chain = $chain;
    }

    /**
     * @return Classification|null
     */
    public function getComfortClassification(): ?Classification
    {
        return $this->comfortClassification;
    }

    /**
     * @param Classification|null $comfortClassification
     */
    public function setComfortClassification(?Classification $comfortClassification): void
    {
        $this->comfortClassification = $comfortClassification;
    }

    /**
     * @return Tag[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param Tag[] $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return CheckInTime[]
     */
    public function getCheckInTimes(): array
    {
        return $this->checkInTimes;
    }

    /**
     * @param CheckInTime[] $checkInTimes
     */
    public function setCheckInTimes(array $checkInTimes): void
    {
        $this->checkInTimes = $checkInTimes;
    }

    /**
     * @return bool
     */
    public function isOnlineReservationPossible(): bool
    {
        return $this->onlineReservationPossible;
    }

    /**
     * @param bool $onlineReservationPossible
     */
    public function setOnlineReservationPossible(bool $onlineReservationPossible): void
    {
        $this->onlineReservationPossible = $onlineReservationPossible;
    }

    /**
     * @return ForeignLanguageDescription[]
     */
    public function getForeignLanguageDescriptions(): array
    {
        return $this->foreignLanguageDescriptions;
    }

    /**
     * @param ForeignLanguageDescription[] $foreignLanguageDescriptions
     */
    public function setForeignLanguageDescriptions(array $foreignLanguageDescriptions): void
    {
        $this->foreignLanguageDescriptions = $foreignLanguageDescriptions;
    }

    /**
     * @return null|string
     */
    public function getVat(): ?string
    {
        return $this->vat;
    }

    /**
     * @param null|string $vat
     */
    public function setVat(?string $vat): void
    {
        $this->vat = $vat;
    }

    /**
     * @return int|null
     */
    public function getDistanceToClosestWalkNetwork(): ?int
    {
        return $this->distanceToClosestWalkNetwork;
    }

    /**
     * @param int|null $distanceToClosestWalkNetwork
     */
    public function setDistanceToClosestWalkNetwork(?int $distanceToClosestWalkNetwork): void
    {
        $this->distanceToClosestWalkNetwork = $distanceToClosestWalkNetwork;
    }

    /**
     * @return int|null
     */
    public function getDistanceToPublicTransport(): ?int
    {
        return $this->distanceToPublicTransport;
    }

    /**
     * @param int|null $distanceToPublicTransport
     */
    public function setDistanceToPublicTransport(?int $distanceToPublicTransport): void
    {
        $this->distanceToPublicTransport = $distanceToPublicTransport;
    }

    /**
     * @return int|null
     */
    public function getBetweenNodes1(): ?int
    {
        return $this->betweenNodes1;
    }

    /**
     * @param int|null $betweenNodes1
     */
    public function setBetweenNodes1(?int $betweenNodes1): void
    {
        $this->betweenNodes1 = $betweenNodes1;
    }

    /**
     * @return int|null
     */
    public function getBetweenNodes2(): ?int
    {
        return $this->betweenNodes2;
    }

    /**
     * @param int|null $betweenNodes2
     */
    public function setBetweenNodes2(?int $betweenNodes2): void
    {
        $this->betweenNodes2 = $betweenNodes2;
    }

    /**
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param Image[] $images
     */
    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    /**
     * @return null|string
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * @param null|string $productType
     */
    public function setProductType(?string $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @return string[]
     */
    public function getVideoLinks(): array
    {
        return $this->videoLinks;
    }

    /**
     * @param string[] $videoLinks
     */
    public function setVideoLinks(array $videoLinks): void
    {
        $this->videoLinks = $videoLinks;
    }

    /**
     * @return Facility[]
     */
    public function getFacilities(): array
    {
        return $this->facilities;
    }

    /**
     * @param Facility[] $facilities
     */
    public function setFacilities(array $facilities): void
    {
        $this->facilities = $facilities;
    }

    /**
     * @return int|null
     */
    public function getStdId(): ?int
    {
        return $this->stdId;
    }

    /**
     * @param int|null $stdId
     */
    public function setStdId(?int $stdId): void
    {
        $this->stdId = $stdId;
    }

    /**
     * @return null|string
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param null|string $website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    /**
     * @return null|string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param null|string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return null|string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param null|string $telephone
     */
    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return null|string
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * @param null|string $emailAddress
     */
    public function setEmailAddress(?string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return OpeningHours[]
     */
    public function getOpeningHours(): array
    {
        return $this->openingHours;
    }

    /**
     * @param OpeningHours[] $openingHours
     */
    public function setOpeningHours(array $openingHours): void
    {
        $this->openingHours = $openingHours;
    }
}
