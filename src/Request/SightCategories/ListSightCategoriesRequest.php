<?php

namespace Nascom\ToerismeWerktApiClient\Request\SightCategories;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class ListSightCategoriesRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\SightCategories
 */
class ListSightCategoriesRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'sightcategories';
    }
}
