<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200Shell
{
    /**
     * @var ConfigGetResponse200ShellPeerValidator
     */
    protected $peerValidator;
    /**
     * @var ConfigGetResponse200ShellBlockValidator
     */
    protected $blockValidator;
    /**
     * @var ConfigGetResponse200ShellPrevalidator
     */
    protected $prevalidator;
    /**
     * @var mixed
     */
    protected $chainValidator;
    /**
     * @var string
     */
    protected $historyMode;

    public function getPeerValidator(): ConfigGetResponse200ShellPeerValidator
    {
        return $this->peerValidator;
    }

    public function setPeerValidator(ConfigGetResponse200ShellPeerValidator $peerValidator): self
    {
        $this->peerValidator = $peerValidator;

        return $this;
    }

    public function getBlockValidator(): ConfigGetResponse200ShellBlockValidator
    {
        return $this->blockValidator;
    }

    public function setBlockValidator(ConfigGetResponse200ShellBlockValidator $blockValidator): self
    {
        $this->blockValidator = $blockValidator;

        return $this;
    }

    public function getPrevalidator(): ConfigGetResponse200ShellPrevalidator
    {
        return $this->prevalidator;
    }

    public function setPrevalidator(ConfigGetResponse200ShellPrevalidator $prevalidator): self
    {
        $this->prevalidator = $prevalidator;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChainValidator()
    {
        return $this->chainValidator;
    }

    /**
     * @param mixed $chainValidator
     */
    public function setChainValidator($chainValidator): self
    {
        $this->chainValidator = $chainValidator;

        return $this;
    }

    public function getHistoryMode(): string
    {
        return $this->historyMode;
    }

    public function setHistoryMode(string $historyMode): self
    {
        $this->historyMode = $historyMode;

        return $this;
    }
}
