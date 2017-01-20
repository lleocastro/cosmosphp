<?php
namespace Cosmos\Collections;

use \Cosmos\Collections\Exceptions\IndexBoundsException;
use \Cosmos\Collections\Exceptions\NullPointerException;

/**
 * Array List
 * @link https://github.com/lleocastro/cosmosphp/
 * @license https://github.com/lleocastro/cosmosphp/blob/master/LICENSE
 * @author Léo Castro <leonardo_carvalho@outlook.com>
 * @package Cosmos\Collections
 */
class ArrayList extends AbstractArrayable
{

    /**
     * Initialize constructor of Arrayable.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Appends the specified element to the end of this list.
     *
     * @param mixed $element
     *
     * @return bool
     */
    public function add($element):bool
    {
        $this->arrayable[] = $element;
        return true;
    }

    /**
     * Inserts the specified element at the specified position in this list.
     *
     * @param int $index
     * @param mixed $element
     *
     * @return bool
     *
     * @throws IndexBoundsException
     */
    public function addIn(int $index, $element):bool
    {}

    /**
     * Replaces the element at the specified position in this list
     * with the specified element.
     *
     * @param int $index
     * @param mixed $element
     *
     * @return bool
     *
     * @throws IndexBoundsException
     */
    public function set(int $index, $element):bool
    {}

    /**
     * Appends all of the elements in the specified collection to
     * the end of this list.
     *
     * @param array $elements
     *
     * @return bool
     *
     * @throws NullPointerException
     */
    public function merge(array $elements):bool
    {}

    /**
     * Returns the element at the specified position in this list.
     *
     * @param int $index
     *
     * @return mixed
     *
     * @throws IndexBoundsException
     */
    public function get(int $index)
    {
        if(array_key_exists($index, $this->arrayable)):

            $this->current = $index;

            return $this->arrayable[$index];
        endif;

        throw new IndexBoundsException("This key '{$index}' not exists in this list!");
    }

    /**
     * Returns true if this list contains the specified element.
     *
     * @param mixed $element
     *
     * @return bool
     */
    public function contains($element):bool
    {}

    /**
     * Returns the index of the first occurrence of the specified
     * element in this list, or -1 if this list does not contain the element.
     *
     * @param mixed $element
     *
     * @return int
     */
    public function indexOf($element):int
    {}

    /**
     * Returns the index of the last occurrence of the specified element
     * in this list, or -1 if this list does not contain the element.
     *
     * @param mixed $element
     *
     * @return int
     */
    public function lastIndexOf($element):int
    {}

    /**
     * Removes the element at the specified position in this list.
     *
     * @param int $index
     *
     * @return bool
     *
     * @throws IndexBoundsException
     */
    public function remove(int $index):bool
    {}

    /**
     * Removes the first occurrence of the specified element from this list.
     *
     * @param mixed $element
     *
     * @return bool
     */
    public function removeByElement($element):bool
    {}

    /**
     * Removes from this list all of the elements whose index is between fromIndex,
     * inclusive, and toIndex, inclusive.
     *
     * @param int $fromIndex
     * @param int $toIndex
     *
     * @return bool
     *
     * @throws IndexBoundsException
     */
    public function removeRange(int $fromIndex, int $toIndex):bool
    {}

    /**
     * Returns a view of the portion of this list between the specified fromIndex,
     * inclusive, and toIndex, inclusive.
     *
     * @param int $fromIndex
     * @param int $toIndex
     *
     * @return array
     *
     * @throws IndexBoundsException
     */
    public function subList(int $fromIndex, int $toIndex):array
    {}

    /**
     *
     */
    public function getIterator()
    {
        return new CollectionIterator($this);
    }

}