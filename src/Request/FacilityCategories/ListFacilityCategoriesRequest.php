<?php

namespace Nascom\ToerismeWerktApiClient\Request\FacilityCategories;

use Nascom\ToerismeWerktApiClient\Request\GetRequest;

/**
 * Class ListFacilityCategoriesRequest
 *
 * @package Nascom\ToerismeWerktApiClient\Request\FacilityCategories
 */
class ListFacilityCategoriesRequest extends GetRequest
{
    /**
     * @inheritdoc
     */
    public function getEndpoint(): string
    {
        return 'facilitycategories';
    }
}
