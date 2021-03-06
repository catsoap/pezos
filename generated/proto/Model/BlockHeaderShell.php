<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class BlockHeaderShell
{
    /**
     * @var int
     */
    protected $level;
    /**
     * @var int
     */
    protected $proto;
    /**
     * @var mixed
     */
    protected $predecessor;
    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @var mixed
     */
    protected $timestamp;
    /**
     * @var int
     */
    protected $validationPass;
    /**
     * @var mixed
     */
    protected $operationsHash;
    /**
     * The fitness, or score, of a block, that allow the Tezos to decide which chain is the best. A fitness value is a list of byte sequences. They are compared as follows: shortest lists are smaller; lists of the same length are compared according to the lexicographical order.
     *
     * @var string[]
     */
    protected $fitness;
    /**
     * @var mixed
     */
    protected $context;

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getProto(): int
    {
        return $this->proto;
    }

    public function setProto(int $proto): self
    {
        $this->proto = $proto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPredecessor()
    {
        return $this->predecessor;
    }

    /**
     * @param mixed $predecessor
     */
    public function setPredecessor($predecessor): self
    {
        $this->predecessor = $predecessor;

        return $this;
    }

    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * A timestamp as seen by the protocol: second-level precision, epoch based.
     *
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getValidationPass(): int
    {
        return $this->validationPass;
    }

    public function setValidationPass(int $validationPass): self
    {
        $this->validationPass = $validationPass;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperationsHash()
    {
        return $this->operationsHash;
    }

    /**
     * @param mixed $operationsHash
     */
    public function setOperationsHash($operationsHash): self
    {
        $this->operationsHash = $operationsHash;

        return $this;
    }

    /**
     * The fitness, or score, of a block, that allow the Tezos to decide which chain is the best. A fitness value is a list of byte sequences. They are compared as follows: shortest lists are smaller; lists of the same length are compared according to the lexicographical order.
     *
     * @return string[]
     */
    public function getFitness(): array
    {
        return $this->fitness;
    }

    /**
     * The fitness, or score, of a block, that allow the Tezos to decide which chain is the best. A fitness value is a list of byte sequences. They are compared as follows: shortest lists are smaller; lists of the same length are compared according to the lexicographical order.
     *
     * @param string[] $fitness
     */
    public function setFitness(array $fitness): self
    {
        $this->fitness = $fitness;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }
}
