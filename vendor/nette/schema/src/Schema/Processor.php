<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Schema;

use Nette;


/**
 * Schema validator.
 */
final class Processor
{
<<<<<<< HEAD
<<<<<<< HEAD
	public array $onNewContext = [];
	private Context $context;
	private bool $skipDefaults = false;


	public function skipDefaults(bool $value = true): void
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	use Nette\SmartObject;

	/** @var array */
	public $onNewContext = [];

	/** @var Context|null */
	private $context;

	/** @var bool */
	private $skipDefaults;


	public function skipDefaults(bool $value = true)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		$this->skipDefaults = $value;
	}


	/**
	 * Normalizes and validates data. Result is a clean completed data.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @throws ValidationException
	 */
	public function process(Schema $schema, mixed $data): mixed
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 * @return mixed
	 * @throws ValidationException
	 */
	public function process(Schema $schema, $data)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		$this->createContext();
		$data = $schema->normalize($data, $this->context);
		$this->throwsErrors();
		$data = $schema->complete($data, $this->context);
		$this->throwsErrors();
		return $data;
	}


	/**
	 * Normalizes and validates and merges multiple data. Result is a clean completed data.
<<<<<<< HEAD
<<<<<<< HEAD
	 * @throws ValidationException
	 */
	public function processMultiple(Schema $schema, array $dataset): mixed
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	 * @return mixed
	 * @throws ValidationException
	 */
	public function processMultiple(Schema $schema, array $dataset)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		$this->createContext();
		$flatten = null;
		$first = true;
		foreach ($dataset as $data) {
			$data = $schema->normalize($data, $this->context);
			$this->throwsErrors();
			$flatten = $first ? $data : $schema->merge($data, $flatten);
			$first = false;
		}

		$data = $schema->complete($flatten, $this->context);
		$this->throwsErrors();
		return $data;
	}


	/**
	 * @return string[]
	 */
	public function getWarnings(): array
	{
		$res = [];
		foreach ($this->context->warnings as $message) {
			$res[] = $message->toString();
		}

		return $res;
	}


	private function throwsErrors(): void
	{
		if ($this->context->errors) {
			throw new ValidationException(null, $this->context->errors);
		}
	}


<<<<<<< HEAD
<<<<<<< HEAD
	private function createContext(): void
	{
		$this->context = new Context;
		$this->context->skipDefaults = $this->skipDefaults;
		Nette\Utils\Arrays::invoke($this->onNewContext, $this->context);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	private function createContext()
	{
		$this->context = new Context;
		$this->context->skipDefaults = $this->skipDefaults;
		$this->onNewContext($this->context);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	}
}
