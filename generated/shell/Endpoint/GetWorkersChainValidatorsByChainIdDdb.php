<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Endpoint;

class GetWorkersChainValidatorsByChainIdDdb extends \Bzzhh\Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    use \Bzzhh\Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    protected $chain_id;

    /**
     * Introspect the state of the DDB attached to a chain validator worker.
     *
     * @param string $chainId A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
     */
    public function __construct(string $chainId)
    {
        $this->chain_id = $chainId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{chain_id}'], [$this->chain_id], '/workers/chain_validators/{chain_id}/ddb');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @return \Bzzhh\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
