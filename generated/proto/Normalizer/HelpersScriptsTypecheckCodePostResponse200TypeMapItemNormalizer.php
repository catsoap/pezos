<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Normalizer;

use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HelpersScriptsTypecheckCodePostResponse200TypeMapItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersScriptsTypecheckCodePostResponse200TypeMapItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersScriptsTypecheckCodePostResponse200TypeMapItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTypecheckCodePostResponse200TypeMapItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('stack_before', $data)) {
            $values = [];
            foreach ($data['stack_before'] as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setStackBefore($values);
        }
        if (\array_key_exists('stack_after', $data)) {
            $values_2 = [];
            foreach ($data['stack_after'] as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setStackAfter($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['location'] = $object->getLocation();
        $values = [];
        foreach ($object->getStackBefore() as $value) {
            $values_1 = [];
            foreach ($value as $value_1) {
                $values_1[] = $value_1;
            }
            $values[] = $values_1;
        }
        $data['stack_before'] = $values;
        $values_2 = [];
        foreach ($object->getStackAfter() as $value_2) {
            $values_3 = [];
            foreach ($value_2 as $value_3) {
                $values_3[] = $value_3;
            }
            $values_2[] = $values_3;
        }
        $data['stack_after'] = $values_2;

        return $data;
    }
}
