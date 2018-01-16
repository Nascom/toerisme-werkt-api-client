<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Facility;

use Nascom\ToerismeWerktApiClient\Model\Facility\Facility;
use Nascom\ToerismeWerktApiClient\Model\Facility\FacilityCategory;
use Nascom\ToerismeWerktApiClient\Serializer\DataPropertyDenormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class FacilityDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Facility
 */
class FacilityDenormalizer implements
    DenormalizerInterface,
    DenormalizerAwareInterface
{
    use DataPropertyDenormalizer;
    use DenormalizerAwareTrait;

    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $facility = new Facility();
        $facility->setDescription($data['attributes']['description'] ?? null);
        $facility->setId($data['id']);

        // When attached to a touristic product, the facility has a 'category'
        // property containing the entire category object.
        // When fetching a list of all facilities, the response contains a
        // 'attributes' property with only the category ID set.
        // For now, we'll only deserialize the category when it's fully set.
        if (isset($data['category'])) {
            $category = $this->denormalizer->denormalize(
                $data['category'],
                FacilityCategory::class
            );
            $facility->setCategory($category);
        }

        return $facility;
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Facility::class;
    }
}
