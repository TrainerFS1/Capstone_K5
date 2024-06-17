<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Schema\Elements;

use Nette;
use Nette\Schema\Context;
use Nette\Schema\Helpers;
use Nette\Schema\Schema;


final class AnyOf implements Schema
{
	use Base;
<<<<<<< HEAD

	private array $set;


	public function __construct(mixed ...$set)
=======
	use Nette\SmartObject;

	/** @var array */
	private $set;


	/**
	 * @param  mixed|Schema  ...$set
	 */
	public function __construct(...$set)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		if (!$set) {
			throw new Nette\InvalidStateException('The enumeration must not be empty.');
		}

		$this->set = $set;
	}


	public function firstIsDefault(): self
	{
		$this->default = $this->set[0];
		return $this;
	}


	public function nullable(): self
	{
		$this->set[] = null;
		return $this;
	}


	public function dynamic(): self
	{
		$this->set[] = new Type(Nette\Schema\DynamicParameter::class);
		return $this;
	}


	/********************* processing ****************d*g**/


<<<<<<< HEAD
	public function normalize(mixed $value, Context $context): mixed
=======
	public function normalize($value, Context $context)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		return $this->doNormalize($value, $context);
	}


<<<<<<< HEAD
	public function merge(mixed $value, mixed $base): mixed
	{
		if (is_array($value) && isset($value[Helpers::PreventMerging])) {
			unset($value[Helpers::PreventMerging]);
=======
	public function merge($value, $base)
	{
		if (is_array($value) && isset($value[Helpers::PREVENT_MERGING])) {
			unset($value[Helpers::PREVENT_MERGING]);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
			return $value;
		}

		return Helpers::merge($value, $base);
	}


<<<<<<< HEAD
	public function complete(mixed $value, Context $context): mixed
	{
		$isOk = $context->createChecker();
		$value = $this->findAlternative($value, $context);
		$isOk() && $value = $this->doTransform($value, $context);
		return $isOk() ? $value : null;
	}


	private function findAlternative(mixed $value, Context $context): mixed
=======
	public function complete($value, Context $context)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		$expecteds = $innerErrors = [];
		foreach ($this->set as $item) {
			if ($item instanceof Schema) {
				$dolly = new Context;
				$dolly->path = $context->path;
				$res = $item->complete($item->normalize($value, $dolly), $dolly);
				if (!$dolly->errors) {
					$context->warnings = array_merge($context->warnings, $dolly->warnings);
<<<<<<< HEAD
					return $res;
=======
					return $this->doFinalize($res, $context);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
				}

				foreach ($dolly->errors as $error) {
					if ($error->path !== $context->path || empty($error->variables['expected'])) {
						$innerErrors[] = $error;
					} else {
						$expecteds[] = $error->variables['expected'];
					}
				}
			} else {
				if ($item === $value) {
<<<<<<< HEAD
					return $value;
=======
					return $this->doFinalize($value, $context);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
				}

				$expecteds[] = Nette\Schema\Helpers::formatValue($item);
			}
		}

		if ($innerErrors) {
			$context->errors = array_merge($context->errors, $innerErrors);
		} else {
			$context->addError(
				'The %label% %path% expects to be %expected%, %value% given.',
<<<<<<< HEAD
				Nette\Schema\Message::TypeMismatch,
				[
					'value' => $value,
					'expected' => implode('|', array_unique($expecteds)),
				],
			);
		}

		return null;
	}


	public function completeDefault(Context $context): mixed
=======
				Nette\Schema\Message::TYPE_MISMATCH,
				[
					'value' => $value,
					'expected' => implode('|', array_unique($expecteds)),
				]
			);
		}
	}


	public function completeDefault(Context $context)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		if ($this->required) {
			$context->addError(
				'The mandatory item %path% is missing.',
<<<<<<< HEAD
				Nette\Schema\Message::MissingItem,
=======
				Nette\Schema\Message::MISSING_ITEM
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
			);
			return null;
		}

		if ($this->default instanceof Schema) {
			return $this->default->completeDefault($context);
		}

		return $this->default;
	}
}
