<?php

class ArrayOfBookingsBasedOnDate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookingsBasedOnDate[] $Booking
     */
    protected $Booking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookingsBasedOnDate[]
     */
    public function getBooking()
    {
      return $this->Booking;
    }

    /**
     * @param BookingsBasedOnDate[] $Booking
     * @return ArrayOfBookingsBasedOnDate
     */
    public function setBooking(array $Booking = null)
    {
      $this->Booking = $Booking;
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
      return isset($this->Booking[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookingsBasedOnDate
     */
    public function offsetGet($offset)
    {
      return $this->Booking[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookingsBasedOnDate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Booking[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Booking[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookingsBasedOnDate Return the current element
     */
    public function current()
    {
      return current($this->Booking);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Booking);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Booking);
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
      reset($this->Booking);
    }

    /**
     * Countable implementation
     *
     * @return BookingsBasedOnDate Return count of elements
     */
    public function count()
    {
      return count($this->Booking);
    }

}
