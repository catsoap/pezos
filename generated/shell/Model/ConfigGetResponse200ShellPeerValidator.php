<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200ShellPeerValidator
{
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $blockHeaderRequestTimeout;
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $blockOperationsRequestTimeout;
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $protocolRequestTimeout;
    /**
     * A span of time, as seen by the local computer.
     *
     * @var int
     */
    protected $newHeadRequestTimeout;
    /**
     * @var int
     */
    protected $workerBacklogSize;
    /**
     * @var string
     */
    protected $workerBacklogLevel;

    /**
     * A span of time, as seen by the local computer.
     */
    public function getBlockHeaderRequestTimeout(): int
    {
        return $this->blockHeaderRequestTimeout;
    }

    /**
     * A span of time, as seen by the local computer.
     */
    public function setBlockHeaderRequestTimeout(int $blockHeaderRequestTimeout): self
    {
        $this->blockHeaderRequestTimeout = $blockHeaderRequestTimeout;

        return $this;
    }

    /**
     * A span of time, as seen by the local computer.
     */
    public function getBlockOperationsRequestTimeout(): int
    {
        return $this->blockOperationsRequestTimeout;
    }

    /**
     * A span of time, as seen by the local computer.
     */
    public function setBlockOperationsRequestTimeout(int $blockOperationsRequestTimeout): self
    {
        $this->blockOperationsRequestTimeout = $blockOperationsRequestTimeout;

        return $this;
    }

    /**
     * A span of time, as seen by the local computer.
     */
    public function getProtocolRequestTimeout(): int
    {
        return $this->protocolRequestTimeout;
    }

    /**
     * A span of time, as seen by the local computer.
     */
    public function setProtocolRequestTimeout(int $protocolRequestTimeout): self
    {
        $this->protocolRequestTimeout = $protocolRequestTimeout;

        return $this;
    }

    /**
     * A span of time, as seen by the local computer.
     */
    public function getNewHeadRequestTimeout(): int
    {
        return $this->newHeadRequestTimeout;
    }

    /**
     * A span of time, as seen by the local computer.
     */
    public function setNewHeadRequestTimeout(int $newHeadRequestTimeout): self
    {
        $this->newHeadRequestTimeout = $newHeadRequestTimeout;

        return $this;
    }

    public function getWorkerBacklogSize(): int
    {
        return $this->workerBacklogSize;
    }

    public function setWorkerBacklogSize(int $workerBacklogSize): self
    {
        $this->workerBacklogSize = $workerBacklogSize;

        return $this;
    }

    public function getWorkerBacklogLevel(): string
    {
        return $this->workerBacklogLevel;
    }

    public function setWorkerBacklogLevel(string $workerBacklogLevel): self
    {
        $this->workerBacklogLevel = $workerBacklogLevel;

        return $this;
    }
}
