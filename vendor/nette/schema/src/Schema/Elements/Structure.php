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


final class Structure implements Schema
{
	use Base;
<<<<<<< HEAD
<<<<<<< HEAD

	/** @var Schema[] */
	private array $items;

	/** for array|list */
	private ?Schema $otherItems = null;

	/** @var array{?int, ?int} */
	private array $range = [null, null];
	private bool $skipDefaults = false;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	use Nette\SmartObject;

	/** @var Schema[] */
	private $items;

	/** @var Schema|null  for array|list */
	private $otherItems;

	/** @var array{?int, ?int} */
	private $range = [null, null];

	/** @var bool */
	private $skipDefaults = false;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485


	/**
	 * @param  Schema[]  $items
	 */
	public function __construct(array $items)
	{
		(function (Schema ...$items) {})(...array_values($items));
		$this->items = $items;
<<<<<<< HEAD
<<<<<<< HEAD
		$this->castTo('object');
=======
		$this->castTo = 'object';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
		$this->castTo = 'object';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
		$this->required = true;
	}


<<<<<<< HEAD
<<<<<<< HEAD
	public function default(mixed $value): self
=======
	public function default($value): self
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
	public function default($value): self
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		throw new Nette\InvalidStateException('Structure cannot have default value.');
	}


	public function min(?int $min): self
	{
		$this->range[0] = $min;
		return $this;
	}


	public function max(?int $max): self
	{
		$this->range[1] = $max;
		return $this;
	}


<<<<<<< HEAD
<<<<<<< HEAD
	public function otherItems(string|Schema $type = 'mixed'): self
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	/**
	 * @param  string|Schema  $type
	 */
	public function otherItems($type = 'mixed'): self
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		$this->otherItems = $type instanceof Schema ? $type : new Type($type);
		return $this;
	}


	public function skipDefaults(bool $state = true): self
	{
		$this->skipDefaults = $state;
		return $this;
	}


	/********************* processing ****************d*g**/


<<<<<<< HEAD
<<<<<<< HEAD
	public function normalize(mixed $value, Context $context): mixed
	{
		if ($prevent = (is_array($value) && isset($value[Helpers::PreventMerging]))) {
			unset($value[Helpers::PreventMerging]);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	public function normalize($value, Context $context)
	{
		if ($prevent = (is_array($value) && isset($value[Helpers::PREVENT_MERGING]))) {
			unset($value[Helpers::PREVENT_MERGING]);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
		}

		$value = $this->doNormalize($value, $context);
		if (is_object($value)) {
			$value = (array) $value;
		}

		if (is_array($value)) {
			foreach ($value as $key => $val) {
				$itemSchema = $this->items[$key] ?? $this->otherItems;
				if ($itemSchema) {
					$context->path[] = $key;
					$value[$key] = $itemSchema->normalize($val, $context);
					array_pop($context->path);
				}
			}

			if ($prevent) {
<<<<<<< HEAD
<<<<<<< HEAD
				$value[Helpers::PreventMerging] = true;
=======
				$value[Helpers::PREVENT_MERGING] = true;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
				$value[Helpers::PREVENT_MERGING] = true;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
			}
		}

		return $value;
	}


<<<<<<< HEAD
<<<<<<< HEAD
	public function merge(mixed $value, mixed $base): mixed
	{
		if (is_array($value) && isset($value[Helpers::PreventMerging])) {
			unset($value[Helpers::PreventMerging]);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	public function merge($value, $base)
	{
		if (is_array($value) && isset($value[Helpers::PREVENT_MERGING])) {
			unset($value[Helpers::PREVENT_MERGING]);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
			$base = null;
		}

		if (is_array($value) && is_array($base)) {
			$index = 0;
			foreach ($value as $key => $val) {
				if ($key === $index) {
					$base[] = $val;
					$index++;
				} elseif (array_key_exists($key, $base)) {
					$itemSchema = $this->items[$key] ?? $this->otherItems;
					$base[$key] = $itemSchema
						? $itemSchema->merge($val, $base[$key])
						: Helpers::merge($val, $base[$key]);
				} else {
					$base[$key] = $val;
				}
			}

			return $base;
		}

		return Helpers::merge($value, $base);
	}


<<<<<<< HEAD
<<<<<<< HEAD
	public function complete(mixed $value, Context $context): mixed
=======
	public function complete($value, Context $context)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
	public function complete($value, Context $context)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		if ($value === null) {
			$value = []; // is unable to distinguish null from array in NEON
		}

		$this->doDeprecation($context);

<<<<<<< HEAD
<<<<<<< HEAD
		$isOk = $context->createChecker();
		Helpers::validateType($value, 'array', $context);
		$isOk() && Helpers::validateRange($value, $this->range, $context);
		$isOk() && $this->validateItems($value, $context);
		$isOk() && $value = $this->doTransform($value, $context);
		return $isOk() ? $value : null;
	}


	private function validateItems(array &$value, Context $context): void
	{
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
		if (!$this->doValidate($value, 'array', $context)
			|| !$this->doValidateRange($value, $this->range, $context)
		) {
			return;
		}

		$errCount = count($context->errors);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
		$items = $this->items;
		if ($extraKeys = array_keys(array_diff_key($value, $items))) {
			if ($this->otherItems) {
				$items += array_fill_keys($extraKeys, $this->otherItems);
			} else {
				$keys = array_map('strval', array_keys($items));
				foreach ($extraKeys as $key) {
<<<<<<< HEAD
<<<<<<< HEAD
					$hint = Nette\Utils\Helpers::getSuggestion($keys, (string) $key);
					$context->addError(
						'Unexpected item %path%' . ($hint ? ", did you mean '%hint%'?" : '.'),
						Nette\Schema\Message::UnexpectedItem,
						['hint' => $hint],
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
					$hint = Nette\Utils\ObjectHelpers::getSuggestion($keys, (string) $key);
					$context->addError(
						'Unexpected item %path%' . ($hint ? ", did you mean '%hint%'?" : '.'),
						Nette\Schema\Message::UNEXPECTED_ITEM,
						['hint' => $hint]
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
					)->path[] = $key;
				}
			}
		}

		foreach ($items as $itemKey => $itemVal) {
			$context->path[] = $itemKey;
			if (array_key_exists($itemKey, $value)) {
				$value[$itemKey] = $itemVal->complete($value[$itemKey], $context);
			} else {
				$default = $itemVal->completeDefault($context); // checks required item
				if (!$context->skipDefaults && !$this->skipDefaults) {
					$value[$itemKey] = $default;
				}
			}

			array_pop($context->path);
		}
<<<<<<< HEAD
<<<<<<< HEAD
	}


	public function completeDefault(Context $context): mixed
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

		if (count($context->errors) > $errCount) {
			return;
		}

		return $this->doFinalize($value, $context);
	}


	public function completeDefault(Context $context)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
	{
		return $this->required
			? $this->complete([], $context)
			: null;
	}
}
