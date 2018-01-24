<?php

namespace Nascom\ToerismeWerktApiClient\Response\Tags;

use Nascom\ToerismeWerktApiClient\Model\Tag;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;

/**
 * Class ListTagsResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response\Tags
 */
class ListTagsResponse extends ListResponse
{
    /**
     * @return Tag[]
     */
    public function getTags(): array
    {
        return $this->getList();
    }
}
