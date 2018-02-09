<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Response\AttractionCategories;

use Nascom\ToerismeWerktApiClient\Model\AttractionCategory;
use Nascom\ToerismeWerktApiClient\Response\AttractionCategories\ListAttractionCategoriesResponse;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ListAttractionCategoriesResponseDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Response\AttractionCategories
 */
class ListAttractionCategoriesResponseDenormalizer implements
  DenormalizerInterface,
  DenormalizerAwareInterface
{
  use DenormalizerAwareTrait;

  /**
   * @inheritdoc
   */
  public function denormalize($data, $class, $format = null, array $context = array())
  {
    $facilities = $this->denormalizer->denormalize(
      $data['data'],
      AttractionCategory::class . '[]'
    );

    return new ListAttractionCategoriesResponse(
      $facilities,
      $data['links'] ?? []
    );
  }

  /**
   * @inheritdoc
   */
  public function supportsDenormalization($data, $type, $format = null)
  {
    return $type == ListAttractionCategoriesResponse::class;
  }
}
