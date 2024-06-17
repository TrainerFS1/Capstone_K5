<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Schema;


interface Schema
{
	/**
	 * Normalization.
	 * @return mixed
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	function normalize(mixed $value, Context $context);
=======
	function normalize($value, Context $context);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
	function normalize($value, Context $context);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

	/**
	 * Merging.
	 * @return mixed
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	function merge(mixed $value, mixed $base);
=======
	function merge($value, $base);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
	function merge($value, $base);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

	/**
	 * Validation and finalization.
	 * @return mixed
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	function complete(mixed $value, Context $context);
=======
	function complete($value, Context $context);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
	function complete($value, Context $context);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

	/**
	 * @return mixed
	 */
	function completeDefault(Context $context);
}
