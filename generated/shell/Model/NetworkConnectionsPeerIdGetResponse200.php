<?php

namespace Pezos\Generated\Shell\Model;

class NetworkConnectionsPeerIdGetResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $incoming;
    /**
     * 
     *
     * @var mixed
     */
    protected $peerId;
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @var P2pConnectionId
     */
    protected $idPoint;
    /**
     * 
     *
     * @var int
     */
    protected $remoteSocketPort;
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @var NetworkVersion
     */
    protected $announcedVersion;
    /**
     * 
     *
     * @var bool
     */
    protected $private;
    /**
     * 
     *
     * @var NetworkConnectionsPeerIdGetResponse200LocalMetadata
     */
    protected $localMetadata;
    /**
     * 
     *
     * @var NetworkConnectionsPeerIdGetResponse200RemoteMetadata
     */
    protected $remoteMetadata;
    /**
     * 
     *
     * @return bool
     */
    public function getIncoming() : bool
    {
        return $this->incoming;
    }
    /**
     * 
     *
     * @param bool $incoming
     *
     * @return self
     */
    public function setIncoming(bool $incoming) : self
    {
        $this->incoming = $incoming;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPeerId()
    {
        return $this->peerId;
    }
    /**
     * 
     *
     * @param mixed $peerId
     *
     * @return self
     */
    public function setPeerId($peerId) : self
    {
        $this->peerId = $peerId;
        return $this;
    }
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @return P2pConnectionId
     */
    public function getIdPoint() : P2pConnectionId
    {
        return $this->idPoint;
    }
    /**
     * The identifier for a p2p connection. It includes an address and a port number.
     *
     * @param P2pConnectionId $idPoint
     *
     * @return self
     */
    public function setIdPoint(P2pConnectionId $idPoint) : self
    {
        $this->idPoint = $idPoint;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRemoteSocketPort() : int
    {
        return $this->remoteSocketPort;
    }
    /**
     * 
     *
     * @param int $remoteSocketPort
     *
     * @return self
     */
    public function setRemoteSocketPort(int $remoteSocketPort) : self
    {
        $this->remoteSocketPort = $remoteSocketPort;
        return $this;
    }
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @return NetworkVersion
     */
    public function getAnnouncedVersion() : NetworkVersion
    {
        return $this->announcedVersion;
    }
    /**
     * A version number for the network protocol (includes distributed DB version and p2p version)
     *
     * @param NetworkVersion $announcedVersion
     *
     * @return self
     */
    public function setAnnouncedVersion(NetworkVersion $announcedVersion) : self
    {
        $this->announcedVersion = $announcedVersion;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * 
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private) : self
    {
        $this->private = $private;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkConnectionsPeerIdGetResponse200LocalMetadata
     */
    public function getLocalMetadata() : NetworkConnectionsPeerIdGetResponse200LocalMetadata
    {
        return $this->localMetadata;
    }
    /**
     * 
     *
     * @param NetworkConnectionsPeerIdGetResponse200LocalMetadata $localMetadata
     *
     * @return self
     */
    public function setLocalMetadata(NetworkConnectionsPeerIdGetResponse200LocalMetadata $localMetadata) : self
    {
        $this->localMetadata = $localMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkConnectionsPeerIdGetResponse200RemoteMetadata
     */
    public function getRemoteMetadata() : NetworkConnectionsPeerIdGetResponse200RemoteMetadata
    {
        return $this->remoteMetadata;
    }
    /**
     * 
     *
     * @param NetworkConnectionsPeerIdGetResponse200RemoteMetadata $remoteMetadata
     *
     * @return self
     */
    public function setRemoteMetadata(NetworkConnectionsPeerIdGetResponse200RemoteMetadata $remoteMetadata) : self
    {
        $this->remoteMetadata = $remoteMetadata;
        return $this;
    }
}