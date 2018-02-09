<?php

namespace Nascom\ToerismeWerktApiClient\Model;

/**
 * Class AttractionCategory
 *
 * @package Nascom\ToerismeWerktApiClient\Model
 */
class AttractionCategory
{
  /**
   * @var string
   */
  private $id;

  /**
   * @var string
   */
  private $name;

  /**
   * @var string
   */
  private $parent  = '';

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id) {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name) {
    $this->name = $name;
  }

  /**
   * @return string|NULL
   */
  public function getParent(): string {
    return $this->parent;
  }

  /**
   * @param string $parent
   */
  public function setParent(string $parent) {
    $this->parent = $parent;
  }
}
