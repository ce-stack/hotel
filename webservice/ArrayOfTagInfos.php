<?php

class ArrayOfTagInfos implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TagInfos[] $TagInfo
     */
    protected $TagInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TagInfos[]
     */
    public function getTagInfo()
    {
      return $this->TagInfo;
    }

    /**
     * @param TagInfos[] $TagInfo
     * @return ArrayOfTagInfos
     */
    public function setTagInfo(array $TagInfo = null)
    {
      $this->TagInfo = $TagInfo;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->TagInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TagInfos
     */
    public function offsetGet($offset)
    {
      return $this->TagInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TagInfos $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->TagInfo[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TagInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TagInfos Return the current element
     */
    public function current()
    {
      return current($this->TagInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TagInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TagInfo);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->TagInfo);
    }

    /**
     * Countable implementation
     *
     * @return TagInfos Return count of elements
     */
    public function count()
    {
      return count($this->TagInfo);
    }

}
