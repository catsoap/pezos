<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Normalizer;

use Bzzhh\Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisements';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisements';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisements();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sent', $data)) {
            $object->setSent($this->denormalizer->denormalize($data['sent'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsSent', 'json', $context));
        }
        if (\array_key_exists('received', $data)) {
            $object->setReceived($this->denormalizer->denormalize($data['received'], 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdPatchResponse200PeerMetadataAdvertisementsReceived', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['sent'] = $this->normalizer->normalize($object->getSent(), 'json', $context);
        $data['received'] = $this->normalizer->normalize($object->getReceived(), 'json', $context);

        return $data;
    }
}
