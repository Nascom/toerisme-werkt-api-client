<?php

namespace Nascom\ToerismeWerktApiClient\Request\AttractionCategories;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

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
}
