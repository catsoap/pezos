<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ProtocolsGetResponse200
{
    /**
     * @var mixed
     */
    protected $protocol;
    /**
     * @var mixed
     */
    protected $nextProtocol;

    /**
     * @return mixed
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param mixed $protocol
     */
    public function setProtocol($protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNextProtocol()
    {
        return $this->nextProtocol;
    }

    /**
     * @param mixed $nextProtocol
     */
    public function setNextProtocol($nextProtocol): self
    {
        $this->nextProtocol = $nextProtocol;

        return $this;
    }
}
