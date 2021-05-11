<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class VotesCurrentPeriodGetResponse200VotingPeriod
{
    /**
     * The voting period's index. Starts at 0 with the first block of protocol alpha.
     *
     * @var int
     */
    protected $index;
    /**
     * @var mixed
     */
    protected $kind;
    /**
     * @var int
     */
    protected $startPosition;

    /**
     * The voting period's index. Starts at 0 with the first block of protocol alpha.
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * The voting period's index. Starts at 0 with the first block of protocol alpha.
     */
    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param mixed $kind
     */
    public function setKind($kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    public function getStartPosition(): int
    {
        return $this->startPosition;
    }

    public function setStartPosition(int $startPosition): self
    {
        $this->startPosition = $startPosition;

        return $this;
    }
}
