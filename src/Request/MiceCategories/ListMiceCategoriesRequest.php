<?php

namespace Nascom\ToerismeWerktApiClient\Request\MiceCategories;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class ListMiceCategoriesRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\MiceCategories
 */
class ListMiceCategoriesRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'micecategories';
    }
}
