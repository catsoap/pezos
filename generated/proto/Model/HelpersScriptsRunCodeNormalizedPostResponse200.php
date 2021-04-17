<?php

namespace Pezos\Generated\Proto\Model;

class HelpersScriptsRunCodeNormalizedPostResponse200
{
    /**
     * 
     *
     * @var mixed
     */
    protected $storage;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $operations;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $bigMapDiff;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $lazyStorageDiff;
    /**
     * 
     *
     * @return mixed
     */
    public function getStorage()
    {
        return $this->storage;
    }
    /**
     * 
     *
     * @param mixed $storage
     *
     * @return self
     */
    public function setStorage($storage) : self
    {
        $this->storage = $storage;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getOperations() : array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param mixed[] $operations
     *
     * @return self
     */
    public function setOperations(array $operations) : self
    {
        $this->operations = $operations;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getBigMapDiff() : array
    {
        return $this->bigMapDiff;
    }
    /**
     * 
     *
     * @param mixed[] $bigMapDiff
     *
     * @return self
     */
    public function setBigMapDiff(array $bigMapDiff) : self
    {
        $this->bigMapDiff = $bigMapDiff;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getLazyStorageDiff() : array
    {
        return $this->lazyStorageDiff;
    }
    /**
     * 
     *
     * @param mixed[] $lazyStorageDiff
     *
     * @return self
     */
    public function setLazyStorageDiff(array $lazyStorageDiff) : self
    {
        $this->lazyStorageDiff = $lazyStorageDiff;
        return $this;
    }
}