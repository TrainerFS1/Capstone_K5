<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Schema;

<<<<<<< HEAD
<<<<<<< HEAD

final class Context
{
	public bool $skipDefaults = false;

	/** @var string[] */
	public array $path = [];

	public bool $isKey = false;

	/** @var Message[] */
	public array $errors = [];

	/** @var Message[] */
	public array $warnings = [];

	/** @var array[] */
	public array $dynamics = [];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Nette;


final class Context
{
	use Nette\SmartObject;

	/** @var bool */
	public $skipDefaults = false;

	/** @var string[] */
	public $path = [];

	/** @var bool */
	public $isKey = false;

	/** @var Message[] */
	public $errors = [];

	/** @var Message[] */
	public $warnings = [];

	/** @var array[] */
	public $dynamics = [];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485


	public function addError(string $message, string $code, array $variables = []): Message
	{
		$variables['isKey'] = $this->isKey;
		return $this->errors[] = new Message($message, $code, $this->path, $variables);
	}


	public function addWarning(string $message, string $code, array $variables = []): Message
	{
		return $this->warnings[] = new Message($message, $code, $this->path, $variables);
	}
<<<<<<< HEAD
<<<<<<< HEAD


	/** @return \Closure(): bool */
	public function createChecker(): \Closure
	{
		$count = count($this->errors);
		return fn(): bool => $count === count($this->errors);
	}
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
