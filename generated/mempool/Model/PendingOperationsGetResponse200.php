<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Mempool\Model;

class PendingOperationsGetResponse200
{
    /**
     * @var PendingOperationsGetResponse200AppliedItem[]
     */
    protected $applied;
    /**
     * @var mixed[][]
     */
    protected $refused;
    /**
     * @var mixed[][]
     */
    protected $branchRefused;
    /**
     * @var mixed[][]
     */
    protected $branchDelayed;
    /**
     * @var mixed[][]
     */
    protected $unprocessed;

    /**
     * @return PendingOperationsGetResponse200AppliedItem[]
     */
    public function getApplied(): array
    {
        return $this->applied;
    }

    /**
     * @param PendingOperationsGetResponse200AppliedItem[] $applied
     */
    public function setApplied(array $applied): self
    {
        $this->applied = $applied;

        return $this;
    }

    /**
     * @return mixed[][]
     */
    public function getRefused(): array
    {
        return $this->refused;
    }

    /**
     * @param mixed[][] $refused
     */
    public function setRefused(array $refused): self
    {
        $this->refused = $refused;

        return $this;
    }

    /**
     * @return mixed[][]
     */
    public function getBranchRefused(): array
    {
        return $this->branchRefused;
    }

    /**
     * @param mixed[][] $branchRefused
     */
    public function setBranchRefused(array $branchRefused): self
    {
        $this->branchRefused = $branchRefused;

        return $this;
    }

    /**
     * @return mixed[][]
     */
    public function getBranchDelayed(): array
    {
        return $this->branchDelayed;
    }

    /**
     * @param mixed[][] $branchDelayed
     */
    public function setBranchDelayed(array $branchDelayed): self
    {
        $this->branchDelayed = $branchDelayed;

        return $this;
    }

    /**
     * @return mixed[][]
     */
    public function getUnprocessed(): array
    {
        return $this->unprocessed;
    }

    /**
     * @param mixed[][] $unprocessed
     */
    public function setUnprocessed(array $unprocessed): self
    {
        $this->unprocessed = $unprocessed;

        return $this;
    }
}
