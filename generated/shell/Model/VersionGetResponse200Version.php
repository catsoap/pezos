<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class VersionGetResponse200Version
{
    /**
     * @var int
     */
    protected $major;
    /**
     * @var int
     */
    protected $minor;
    /**
     * @var mixed
     */
    protected $additionalInfo;

    public function getMajor(): int
    {
        return $this->major;
    }

    public function setMajor(int $major): self
    {
        $this->major = $major;

        return $this;
    }

    public function getMinor(): int
    {
        return $this->minor;
    }

    public function setMinor(int $minor): self
    {
        $this->minor = $minor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param mixed $additionalInfo
     */
    public function setAdditionalInfo($additionalInfo): self
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}
