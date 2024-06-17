<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Utils;

use Nette;


/**
 * Paginating math.
 *
 * @property   int $page
 * @property-read int $firstPage
 * @property-read int|null $lastPage
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read int<0,max> $firstItemOnPage
 * @property-read int<0,max> $lastItemOnPage
 * @property   int $base
 * @property-read bool $first
 * @property-read bool $last
 * @property-read int<0,max>|null $pageCount
 * @property   positive-int $itemsPerPage
 * @property   int<0,max>|null $itemCount
 * @property-read int<0,max> $offset
 * @property-read int<0,max>|null $countdownOffset
 * @property-read int<0,max> $length
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * @property-read int $firstItemOnPage
 * @property-read int $lastItemOnPage
 * @property   int $base
 * @property-read bool $first
 * @property-read bool $last
 * @property-read int|null $pageCount
 * @property   int $itemsPerPage
 * @property   int|null $itemCount
 * @property-read int $offset
 * @property-read int|null $countdownOffset
 * @property-read int $length
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
class Paginator
{
	use Nette\SmartObject;

	private int $base = 1;
<<<<<<< HEAD
<<<<<<< HEAD

	/** @var positive-int */
	private int $itemsPerPage = 1;

	private int $page = 1;

	/** @var int<0, max>|null */
=======
	private int $itemsPerPage = 1;
	private int $page = 1;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
	private int $itemsPerPage = 1;
	private int $page = 1;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	private ?int $itemCount = null;


	/**
	 * Sets current page number.
	 */
	public function setPage(int $page): static
	{
		$this->page = $page;
		return $this;
	}


	/**
	 * Returns current page number.
	 */
	public function getPage(): int
	{
		return $this->base + $this->getPageIndex();
	}


	/**
	 * Returns first page number.
	 */
	public function getFirstPage(): int
	{
		return $this->base;
	}


	/**
	 * Returns last page number.
	 */
	public function getLastPage(): ?int
	{
		return $this->itemCount === null
			? null
			: $this->base + max(0, $this->getPageCount() - 1);
	}


	/**
	 * Returns the sequence number of the first element on the page
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return int<0, max>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function getFirstItemOnPage(): int
	{
		return $this->itemCount !== 0
			? $this->offset + 1
			: 0;
	}


	/**
	 * Returns the sequence number of the last element on the page
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return int<0, max>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function getLastItemOnPage(): int
	{
		return $this->offset + $this->length;
	}


	/**
	 * Sets first page (base) number.
	 */
	public function setBase(int $base): static
	{
		$this->base = $base;
		return $this;
	}


	/**
	 * Returns first page (base) number.
	 */
	public function getBase(): int
	{
		return $this->base;
	}


	/**
	 * Returns zero-based page number.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return int<0, max>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	protected function getPageIndex(): int
	{
		$index = max(0, $this->page - $this->base);
		return $this->itemCount === null
			? $index
			: min($index, max(0, $this->getPageCount() - 1));
	}


	/**
	 * Is the current page the first one?
	 */
	public function isFirst(): bool
	{
		return $this->getPageIndex() === 0;
	}


	/**
	 * Is the current page the last one?
	 */
	public function isLast(): bool
	{
		return $this->itemCount === null
			? false
			: $this->getPageIndex() >= $this->getPageCount() - 1;
	}


	/**
	 * Returns the total number of pages.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return int<0, max>|null
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function getPageCount(): ?int
	{
		return $this->itemCount === null
			? null
			: (int) ceil($this->itemCount / $this->itemsPerPage);
	}


	/**
	 * Sets the number of items to display on a single page.
	 */
	public function setItemsPerPage(int $itemsPerPage): static
	{
		$this->itemsPerPage = max(1, $itemsPerPage);
		return $this;
	}


	/**
	 * Returns the number of items to display on a single page.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return positive-int
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function getItemsPerPage(): int
	{
		return $this->itemsPerPage;
	}


	/**
	 * Sets the total number of items.
	 */
	public function setItemCount(?int $itemCount = null): static
	{
		$this->itemCount = $itemCount === null ? null : max(0, $itemCount);
		return $this;
	}


	/**
	 * Returns the total number of items.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return int<0, max>|null
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function getItemCount(): ?int
	{
		return $this->itemCount;
	}


	/**
	 * Returns the absolute index of the first item on current page.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return int<0, max>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function getOffset(): int
	{
		return $this->getPageIndex() * $this->itemsPerPage;
	}


	/**
	 * Returns the absolute index of the first item on current page in countdown paging.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return int<0, max>|null
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function getCountdownOffset(): ?int
	{
		return $this->itemCount === null
			? null
			: max(0, $this->itemCount - ($this->getPageIndex() + 1) * $this->itemsPerPage);
	}


	/**
	 * Returns the number of items on current page.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @return int<0, max>
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 */
	public function getLength(): int
	{
		return $this->itemCount === null
			? $this->itemsPerPage
			: min($this->itemsPerPage, $this->itemCount - $this->getPageIndex() * $this->itemsPerPage);
	}
}
