<?php

namespace Nascom\ToerismeWerktApiClient\Request\Tags;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class ListTagsRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\Tags
 */
class ListTagsRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'tags';
    }
}
