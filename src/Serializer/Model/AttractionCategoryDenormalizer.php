<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model;

use Nascom\ToerismeWerktApiClient\Model\AttractionCategory;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class AttractionCategoryDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Facility
 */
class AttractionCategoryDenormalizer implements
  DenormalizerInterface,
  DenormalizerAwareInterface
{
  use DenormalizerAwareTrait;

  /**
   * @inheritdoc
   */
  public function denormalize($data, $class, $format = null, array $context = array())
  {
    $category = new AttractionCategory();
    $category->setId($data['id']);

    // The list and object query have a slightly different structure
    if (isset($data['name'])) {
      $category->setName($data['name']);
    }
    elseif (isset($data['attributes']['name'])) {
      $category->setName($data['attributes']['name']);
    }

    if (!empty($data['attributes']['parentId'])) {
      $category->setParent($data['attributes']['parentId']);
    }
    else {
      $category->setParent('');
    }

    return $category;
  }

  /**
   * @inheritdoc
   */
  public function supportsDenormalization($data, $type, $format = null)
  {
    return $type == AttractionCategory::class;
  }
}
