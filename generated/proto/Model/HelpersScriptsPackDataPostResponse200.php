<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersScriptsPackDataPostResponse200
{
    /**
     * @var string
     */
    protected $packed;
    /**
     * @var mixed
     */
    protected $gas;

    public function getPacked(): string
    {
        return $this->packed;
    }

    public function setPacked(string $packed): self
    {
        $this->packed = $packed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * @param mixed $gas
     */
    public function setGas($gas): self
    {
        $this->gas = $gas;

        return $this;
    }
}
