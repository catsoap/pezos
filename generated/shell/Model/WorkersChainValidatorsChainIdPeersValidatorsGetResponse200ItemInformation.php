<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformation
{
    /**
     * @var int
     */
    protected $instances;
    /**
     * @var mixed
     */
    protected $status;
    /**
     * @var int
     */
    protected $queueLength;

    public function getInstances(): int
    {
        return $this->instances;
    }

    public function setInstances(int $instances): self
    {
        $this->instances = $instances;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getQueueLength(): int
    {
        return $this->queueLength;
    }

    public function setQueueLength(int $queueLength): self
    {
        $this->queueLength = $queueLength;

        return $this;
    }
}
