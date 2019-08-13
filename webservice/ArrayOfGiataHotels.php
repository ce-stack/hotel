<?php

class ArrayOfGiataHotels implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GiataHotels[] $Hotel
     */
    protected $Hotel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GiataHotels[]
     */
    public function getHotel()
    {
      return $this->Hotel;
    }

    /**
     * @param GiataHotels[] $Hotel
     * @return ArrayOfGiataHotels
     */
    public function setHotel(array $Hotel = null)
    {
      $this->Hotel = $Hotel;
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
      return isset($this->Hotel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GiataHotels
     */
    public function offsetGet($offset)
    {
      return $this->Hotel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GiataHotels $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Hotel[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Hotel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GiataHotels Return the current element
     */
    public function current()
    {
      return current($this->Hotel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Hotel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Hotel);
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
      reset($this->Hotel);
    }

    /**
     * Countable implementation
     *
     * @return GiataHotels Return count of elements
     */
    public function count()
    {
      return count($this->Hotel);
    }

}
