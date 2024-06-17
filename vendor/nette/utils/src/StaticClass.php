<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette;


/**
 * Static class.
 */
trait StaticClass
{
	/**
<<<<<<< HEAD
<<<<<<< HEAD
	 * Class is static and cannot be instantiated.
	 */
	private function __construct()
	{
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 * @return never
	 * @throws \Error
	 */
	final public function __construct()
	{
		throw new \Error('Class ' . static::class . ' is static and cannot be instantiated.');
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	}


	/**
	 * Call to undefined static method.
	 * @throws MemberAccessException
	 */
	public static function __callStatic(string $name, array $args): mixed
	{
		Utils\ObjectHelpers::strictStaticCall(static::class, $name);
	}
}
