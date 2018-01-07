<?php

namespace Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates;

use Nascom\ToerismeWerktApiClient\Model\Aggregates\Prices;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class PricesDenormalizer
 *
 * @package Nascom\ToerismeWerktApiClient\Serializer\Model\Aggregates
 */
class PricesDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        return new Prices(
            $data['individueleTarieven'] ?? null,
            $data['groepsTarieven'] ?? null,
            $data['gemiddeldeRichtPrijsVolwassenPersoon'] ?? null
        );
    }

    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type == Prices::class;
    }

}
