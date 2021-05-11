<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetContextContractsByContractIdSingleSaplingGetDiff extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $contract_id;

    /**
     * Returns the root and a diff of a state starting from an optional offset which is zero by default.
     *
     * @param string $contractId      a contract identifier encoded in b58check
     * @param array  $queryParameters {
     *
     *     @var string $offset_commitment commitments and ciphertexts are returned from the specified offset up to the most recent
     *     @var string $offset_nullifier Nullifiers are returned from the specified offset up to the most recent.
     * }
     */
    public function __construct(string $contractId, array $queryParameters = [])
    {
        $this->contract_id = $contractId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{contract_id}'], [$this->contract_id], '/context/contracts/{contract_id}/single_sapling_get_diff');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offset_commitment', 'offset_nullifier']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('offset_commitment', ['string']);
        $optionsResolver->setAllowedTypes('offset_nullifier', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Bzzhh\Pezos\Generated\Proto\Model\ContextContractsContractIdSingleSaplingGetDiffGetResponse200|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextContractsContractIdSingleSaplingGetDiffGetResponse200', 'json');
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
