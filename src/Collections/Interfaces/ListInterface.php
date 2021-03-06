<?php
namespace Cosmos\Collections\Interfaces;

use \Cosmos\Collections\Exceptions\IndexBoundsException;
use \Cosmos\Collections\Exceptions\NullPointerException;

/**
 * List Interface
 * @link https://github.com/lleocastro/cosmosphp/
 * @license https://github.com/lleocastro/cosmosphp/blob/master/LICENSE
 * @author Léo Castro <leonardo_carvalho@outlook.com>
 * @package Cosmos\Collections\Interfaces
 */
interface ListInterface extends CollectionInterface
{
    /**
     * Inserts the specified element at the specified position in this list.
     *
     * @param int $index
     * @param mixed $element
     *
     * @return bool
     *
     * @throws NullPointerException
     */
    public function addIn(int $index, $element):bool;

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
    public function set(int $index, $element):bool;

    /**
     * Returns index if this list contains the specified element.
     *
     * @param mixed $element
     *
     * @return bool
     */
    public function contains($element):bool;

    /**
     * Returns the index of the first occurrence of the specified
     * element in this list, or -1 if this list does not contain the element.
     *
     * @param mixed $element
     *
     * @return int
     */
    public function indexOf($element):int;

    /**
     * Returns the index of the last occurrence of the specified element
     * in this list, or -1 if this list does not contain the element.
     *
     * @param mixed $element
     *
     * @return int
     */
    public function lastIndexOf($element):int;

    /**
     * Removes the occurrences of the specified element from this list.
     *
     * @param mixed $element
     * @param bool  $firstOccurrence
     * @param bool  $lastOccurrence
     *
     * @return bool
     */
    public function removeByElement($element, bool $firstOccurrence, bool $lastOccurrence):bool;

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
    public function removeRange(int $fromIndex, int $toIndex):bool;

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
    public function subList(int $fromIndex, int $toIndex):array;

}
