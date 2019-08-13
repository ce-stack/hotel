<?php

class ArrayOfCityWiseNotification implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CityWiseNotification[] $CityWiseNotification
     */
    protected $CityWiseNotification = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CityWiseNotification[]
     */
    public function getCityWiseNotification()
    {
      return $this->CityWiseNotification;
    }

    /**
     * @param CityWiseNotification[] $CityWiseNotification
     * @return ArrayOfCityWiseNotification
     */
    public function setCityWiseNotification(array $CityWiseNotification = null)
    {
      $this->CityWiseNotification = $CityWiseNotification;
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
      return isset($this->CityWiseNotification[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CityWiseNotification
     */
    public function offsetGet($offset)
    {
      return $this->CityWiseNotification[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CityWiseNotification $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CityWiseNotification[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CityWiseNotification[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CityWiseNotification Return the current element
     */
    public function current()
    {
      return current($this->CityWiseNotification);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CityWiseNotification);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CityWiseNotification);
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
      reset($this->CityWiseNotification);
    }

    /**
     * Countable implementation
     *
     * @return CityWiseNotification Return count of elements
     */
    public function count()
    {
      return count($this->CityWiseNotification);
    }

}
