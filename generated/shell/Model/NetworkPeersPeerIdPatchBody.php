<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkPeersPeerIdPatchBody
{
    /**
     * @var string
     */
    protected $acl;

    public function getAcl(): string
    {
        return $this->acl;
    }

    public function setAcl(string $acl): self
    {
        $this->acl = $acl;

        return $this;
    }
}
