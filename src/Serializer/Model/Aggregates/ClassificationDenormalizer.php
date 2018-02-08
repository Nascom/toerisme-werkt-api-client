<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Classification;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ClassificationDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates
 */
class ClassificationDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!$this->isClassificationString($data)) {
            return null;
        }

        return Classification::fromString($data);
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Classification::class;
    }

    /**
     * Checks if the string represents a classification (e.g. "***").
     *
     * @param string $classificationString
     * @return bool
     */
    protected function isClassificationString(string $classificationString): bool
    {
        $stars = trim($classificationString);
        return $stars == str_repeat('*', strlen($stars));
    }
}
