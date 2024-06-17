<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Schema;

use Nette;


/**
 * Validation error.
 */
class ValidationException extends Nette\InvalidStateException
{
	/** @var Message[] */
<<<<<<< HEAD
	private array $messages;
=======
	private $messages;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485


	/**
	 * @param  Message[]  $messages
	 */
	public function __construct(?string $message, array $messages = [])
	{
		parent::__construct($message ?: $messages[0]->toString());
		$this->messages = $messages;
	}


	/**
	 * @return string[]
	 */
	public function getMessages(): array
	{
		$res = [];
		foreach ($this->messages as $message) {
			$res[] = $message->toString();
		}

		return $res;
	}


	/**
	 * @return Message[]
	 */
	public function getMessageObjects(): array
	{
		return $this->messages;
	}
}
