<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersEndorsingRightsGetResponse200Item
{
    /**
     * @var int
     */
    protected $level;
    /**
     * @var mixed
     */
    protected $delegate;
    /**
     * @var int[]
     */
    protected $slots;
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @var mixed
     */
    protected $estimatedTime;

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDelegate()
    {
        return $this->delegate;
    }

    /**
     * @param mixed $delegate
     */
    public function setDelegate($delegate): self
    {
        $this->delegate = $delegate;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getSlots(): array
    {
        return $this->slots;
    }

    /**
     * @param int[] $slots
     */
    public function setSlots(array $slots): self
    {
        $this->slots = $slots;

        return $this;
    }

    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @return mixed
     */
    public function getEstimatedTime()
    {
        return $this->estimatedTime;
    }

    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @param mixed $estimatedTime
     */
    public function setEstimatedTime($estimatedTime): self
    {
        $this->estimatedTime = $estimatedTime;

        return $this;
    }
}
