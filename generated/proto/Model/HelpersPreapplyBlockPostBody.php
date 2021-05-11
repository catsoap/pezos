<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostBody
{
    /**
     * @var HelpersPreapplyBlockPostBodyProtocolData
     */
    protected $protocolData;
    /**
     * @var NextOperation[][]
     */
    protected $operations;

    public function getProtocolData(): HelpersPreapplyBlockPostBodyProtocolData
    {
        return $this->protocolData;
    }

    public function setProtocolData(HelpersPreapplyBlockPostBodyProtocolData $protocolData): self
    {
        $this->protocolData = $protocolData;

        return $this;
    }

    /**
     * @return NextOperation[][]
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    /**
     * @param NextOperation[][] $operations
     */
    public function setOperations(array $operations): self
    {
        $this->operations = $operations;

        return $this;
    }
}
