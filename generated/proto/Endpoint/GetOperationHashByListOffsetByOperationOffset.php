<?php

namespace Pezos\Generated\Proto\Endpoint;

class GetOperationHashByListOffsetByOperationOffset extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    protected $list_offset;
    protected $operation_offset;
    /**
     * The hash of then `m-th` operation in the `n-th` validation pass of the block.
     *
     * @param string $listOffset Index `n` of the requested validation pass.
     * @param string $operationOffset Index `m` of the requested operation in its validation pass.
     */
    public function __construct(string $listOffset, string $operationOffset)
    {
        $this->list_offset = $listOffset;
        $this->operation_offset = $operationOffset;
    }
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{list_offset}', '{operation_offset}'), array($this->list_offset, $this->operation_offset), '/operation_hashes/{list_offset}/{operation_offset}');
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
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
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