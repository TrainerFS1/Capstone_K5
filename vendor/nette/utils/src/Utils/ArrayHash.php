<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Utils;

use Nette;


/**
 * Provides objects to work as array.
 * @template T
<<<<<<< HEAD
 * @implements \IteratorAggregate<array-key, T>
 * @implements \ArrayAccess<array-key, T>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
class ArrayHash extends \stdClass implements \ArrayAccess, \Countable, \IteratorAggregate
{
	/**
	 * Transforms array to ArrayHash.
	 * @param  array<T>  $array
	 */
	public static function from(array $array, bool $recursive = true): static
	{
		$obj = new static;
		foreach ($array as $key => $value) {
			$obj->$key = $recursive && is_array($value)
<<<<<<< HEAD
				? static::from($value)
=======
				? static::from($value, true)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
				: $value;
		}

		return $obj;
	}


	/**
	 * Returns an iterator over all items.
<<<<<<< HEAD
	 * @return \Iterator<array-key, T>
=======
	 * @return \Iterator<int|string, T>
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function &getIterator(): \Iterator
	{
		foreach ((array) $this as $key => $foo) {
			yield $key => $this->$key;
		}
	}


	/**
	 * Returns items count.
	 */
	public function count(): int
	{
		return count((array) $this);
	}


	/**
	 * Replaces or appends a item.
<<<<<<< HEAD
	 * @param  array-key  $key
=======
	 * @param  string|int  $key
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 * @param  T  $value
	 */
	public function offsetSet($key, $value): void
	{
		if (!is_scalar($key)) { // prevents null
<<<<<<< HEAD
			throw new Nette\InvalidArgumentException(sprintf('Key must be either a string or an integer, %s given.', get_debug_type($key)));
=======
			throw new Nette\InvalidArgumentException(sprintf('Key must be either a string or an integer, %s given.', gettype($key)));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
		}

		$this->$key = $value;
	}


	/**
	 * Returns a item.
<<<<<<< HEAD
	 * @param  array-key  $key
=======
	 * @param  string|int  $key
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 * @return T
	 */
	#[\ReturnTypeWillChange]
	public function offsetGet($key)
	{
		return $this->$key;
	}


	/**
	 * Determines whether a item exists.
<<<<<<< HEAD
	 * @param  array-key  $key
=======
	 * @param  string|int  $key
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function offsetExists($key): bool
	{
		return isset($this->$key);
	}


	/**
	 * Removes the element from this list.
<<<<<<< HEAD
	 * @param  array-key  $key
=======
	 * @param  string|int  $key
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function offsetUnset($key): void
	{
		unset($this->$key);
	}
}
