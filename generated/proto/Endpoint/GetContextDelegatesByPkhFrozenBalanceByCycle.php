<?php

namespace Pezos\Generated\Proto\Endpoint;

class GetContextDelegatesByPkhFrozenBalanceByCycle extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    protected $pkh;
    /**
     * Returns the frozen balances of a given delegate, indexed by the cycle by which it will be unfrozen
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     */
    public function __construct(string $pkh)
    {
        $this->pkh = $pkh;
    }
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{pkh}'), array($this->pkh), '/context/delegates/{pkh}/frozen_balance_by_cycle');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Pezos\Generated\Proto\Model\ContextDelegatesPkhFrozenBalanceByCycleGetResponse200Item[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Proto\\Model\\ContextDelegatesPkhFrozenBalanceByCycleGetResponse200Item[]', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}