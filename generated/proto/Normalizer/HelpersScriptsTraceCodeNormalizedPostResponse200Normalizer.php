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

class HelpersScriptsTraceCodeNormalizedPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersScriptsTraceCodeNormalizedPostResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\HelpersScriptsTraceCodeNormalizedPostResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\HelpersScriptsTraceCodeNormalizedPostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('storage', $data)) {
            $object->setStorage($data['storage']);
        }
        if (\array_key_exists('operations', $data)) {
            $values = [];
            foreach ($data['operations'] as $value) {
                $values[] = $value;
            }
            $object->setOperations($values);
        }
        if (\array_key_exists('trace', $data)) {
            $values_1 = [];
            foreach ($data['trace'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\_009PsFLorenScriptedTraceItem', 'json', $context);
            }
            $object->setTrace($values_1);
        }
        if (\array_key_exists('big_map_diff', $data)) {
            $values_2 = [];
            foreach ($data['big_map_diff'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBigMapDiff($values_2);
        }
        if (\array_key_exists('lazy_storage_diff', $data)) {
            $values_3 = [];
            foreach ($data['lazy_storage_diff'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLazyStorageDiff($values_3);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['storage'] = $object->getStorage();
        $values = [];
        foreach ($object->getOperations() as $value) {
            $values[] = $value;
        }
        $data['operations'] = $values;
        $values_1 = [];
        foreach ($object->getTrace() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['trace'] = $values_1;
        if (null !== $object->getBigMapDiff()) {
            $values_2 = [];
            foreach ($object->getBigMapDiff() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['big_map_diff'] = $values_2;
        }
        if (null !== $object->getLazyStorageDiff()) {
            $values_3 = [];
            foreach ($object->getLazyStorageDiff() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['lazy_storage_diff'] = $values_3;
        }

        return $data;
    }
}
