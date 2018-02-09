<?php

namespace Nascom\ToerismeWerktApiClient\Request\AttractionCategories;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;
use Nascom\ToerismeWerktApiClient\Response\AttractionCategories\ListAttractionCategoriesResponse;

/**
 * Class ListAttractionCategoriesRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\AttractionCategories
 */
class ListAttractionCategoriesRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'attractioncategories';
    }

    /**
     * @return string
     */
    public function getResponseClass(): string
    {
      return ListAttractionCategoriesResponse::class;
    }
}
