<?php

namespace Nascom\ToerismeWerktApiClient\Response;
use Traversable;

/**
 * Class ListResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response
 */
class ListResponse extends Response implements \IteratorAggregate
{
    /**
     * @var array
     */
    protected $list;

    /**
     * ListResponse constructor.
     *
     * @param array $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    /**
     * @inheritdoc
     */
    public static function fromApiResponse(string $apiResponse): ResponseInterface
    {
        $listResponse = parent::fromApiResponse($apiResponse);
        $listResponse->list = $listResponse->getData()['data'] ?? [];

        return $listResponse;
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->list);
    }

    /**
     * Returns the list from the response.
     *
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->getData()['links'];
    }

    /**
     * @return bool
     */
    public function hasNextPage(): bool
    {
        return !empty($this->getNextLink());
    }

    /**
     * @return string
     */
    public function getSelfLink(): string
    {
        return $this->getLinks()['self'];
    }

    /**
     * @return null|string
     */
    public function getNextLink(): ?string
    {
        return $this->getLinkOrNull('next');
    }

    /**
     * @return null|string
     */
    public function getLastLink(): ?string
    {
        return $this->getLinkOrNull('last');
    }

    /**
     * @return null|string
     */
    public function getPrevLink(): ?string
    {
        return $this->getLinkOrNull('prev');
    }

    /**
     * @return null|string
     */
    public function getFirstLink(): ?string
    {
        return $this->getLinkOrNull('first');
    }

    /**
     * @param string $link
     * @return null|string
     */
    private function getLinkOrNull(string $link): ?string
    {
        return $this->getLinks()[$link] ?? null;
    }
}
