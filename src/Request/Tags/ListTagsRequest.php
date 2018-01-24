<?php

namespace Nascom\ToerismeWerktApiClient\Request\Tags;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;
use Nascom\ToerismeWerktApiClient\Response\Tags\ListTagsResponse;

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

    /**
     * @inheritdoc
     */
    public function getResponseClass(): string
    {
        return ListTagsResponse::class;
    }
}
