<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem
{
    /**
     * @var mixed
     */
    protected $hash;
    /**
     * @var mixed
     */
    protected $branch;
    /**
     * @var string
     */
    protected $data;
    /**
     * The full list of error is available with the global RPC `GET errors`.
     *
     * @var mixed
     */
    protected $error;

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param mixed $hash
     */
    public function setHash($hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param mixed $branch
     */
    public function setBranch($branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * The full list of error is available with the global RPC `GET errors`.
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * The full list of error is available with the global RPC `GET errors`.
     *
     * @param mixed $error
     */
    public function setError($error): self
    {
        $this->error = $error;

        return $this;
    }
}
