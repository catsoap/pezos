<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersPrevalidatorsChainIdGetResponse200CurrentRequest
{
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
     */
    protected $pushed;
    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @var mixed
     */
    protected $treated;
    /**
     * @var mixed
     */
    protected $request;

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @return mixed
     */
    public function getPushed()
    {
        return $this->pushed;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @param mixed $pushed
     */
    public function setPushed($pushed): self
    {
        $this->pushed = $pushed;

        return $this;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @return mixed
     */
    public function getTreated()
    {
        return $this->treated;
    }

    /**
     * A timestamp as seen by the underlying, local computer: subsecond-level precision, epoch or rfc3339 based.
     *
     * @param mixed $treated
     */
    public function setTreated($treated): self
    {
        $this->treated = $treated;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request): self
    {
        $this->request = $request;

        return $this;
    }
}
