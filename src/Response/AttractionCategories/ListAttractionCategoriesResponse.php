<?php

namespace Nascom\ToerismeWerktApiClient\Response\AttractionCategories;

use Nascom\ToerismeWerktApiClient\Model\AttractionCategory;
use Nascom\ToerismeWerktApiClient\Response\ListResponse;

/**
 * Class ListAttractionCategoriesResponse
 *
 * @package Nascom\ToerismeWerktApiClient\Response\Facilities
 */
class ListAttractionCategoriesResponse extends ListResponse
{
  /**
   * @return AttractionCategory[]
   */
  public function getAttractionCategories(): array
  {
    return $this->getList();
  }
}
