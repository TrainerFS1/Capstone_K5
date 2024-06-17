<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\NodeAbstract;

<<<<<<< HEAD
<<<<<<< HEAD
class Name extends NodeAbstract {
    /** @var string Name as string */
    public string $name;

    /** @var array<string, bool> */
    private static array $specialClassNames = [
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Name extends NodeAbstract
{
    /** @var string[] Parts of the name */
    public $parts;

    private static $specialClassNames = [
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        'self'   => true,
        'parent' => true,
        'static' => true,
    ];

    /**
     * Constructs a name node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|string[]|self $name Name as string, part array or Name instance (copy ctor)
     * @param array<string, mixed> $attributes Additional attributes
     */
    final public function __construct($name, array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = self::prepareName($name);
    }

    public function getSubNodeNames(): array {
        return ['name'];
    }

    /**
     * Get parts of name (split by the namespace separator).
     *
     * @return string[] Parts of name
     */
    public function getParts(): array {
        return \explode('\\', $this->name);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string|string[]|self $name       Name as string, part array or Name instance (copy ctor)
     * @param array                $attributes Additional attributes
     */
    public function __construct($name, array $attributes = []) {
        $this->attributes = $attributes;
        $this->parts = self::prepareName($name);
    }

    public function getSubNodeNames() : array {
        return ['parts'];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Gets the first part of the name, i.e. everything before the first namespace separator.
     *
     * @return string First part of the name
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFirst(): string {
        if (false !== $pos = \strpos($this->name, '\\')) {
            return \substr($this->name, 0, $pos);
        }
        return $this->name;
=======
    public function getFirst() : string {
        return $this->parts[0];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getFirst() : string {
        return $this->parts[0];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Gets the last part of the name, i.e. everything after the last namespace separator.
     *
     * @return string Last part of the name
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLast(): string {
        if (false !== $pos = \strrpos($this->name, '\\')) {
            return \substr($this->name, $pos + 1);
        }
        return $this->name;
=======
    public function getLast() : string {
        return $this->parts[count($this->parts) - 1];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getLast() : string {
        return $this->parts[count($this->parts) - 1];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Checks whether the name is unqualified. (E.g. Name)
     *
     * @return bool Whether the name is unqualified
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function isUnqualified(): bool {
        return false === \strpos($this->name, '\\');
=======
    public function isUnqualified() : bool {
        return 1 === count($this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function isUnqualified() : bool {
        return 1 === count($this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Checks whether the name is qualified. (E.g. Name\Name)
     *
     * @return bool Whether the name is qualified
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function isQualified(): bool {
        return false !== \strpos($this->name, '\\');
=======
    public function isQualified() : bool {
        return 1 < count($this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function isQualified() : bool {
        return 1 < count($this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Checks whether the name is fully qualified. (E.g. \Name)
     *
     * @return bool Whether the name is fully qualified
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function isFullyQualified(): bool {
=======
    public function isFullyQualified() : bool {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function isFullyQualified() : bool {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return false;
    }

    /**
     * Checks whether the name is explicitly relative to the current namespace. (E.g. namespace\Name)
     *
     * @return bool Whether the name is relative
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function isRelative(): bool {
=======
    public function isRelative() : bool {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function isRelative() : bool {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return false;
    }

    /**
     * Returns a string representation of the name itself, without taking the name type into
     * account (e.g., not including a leading backslash for fully qualified names).
     *
     * @return string String representation
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function toString(): string {
        return $this->name;
=======
    public function toString() : string {
        return implode('\\', $this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function toString() : string {
        return implode('\\', $this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Returns a string representation of the name as it would occur in code (e.g., including
     * leading backslash for fully qualified names.
     *
     * @return string String representation
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function toCodeString(): string {
=======
    public function toCodeString() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function toCodeString() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->toString();
    }

    /**
     * Returns lowercased string representation of the name, without taking the name type into
     * account (e.g., no leading backslash for fully qualified names).
     *
     * @return string Lowercased string representation
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function toLowerString(): string {
        return strtolower($this->name);
=======
    public function toLowerString() : string {
        return strtolower(implode('\\', $this->parts));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function toLowerString() : string {
        return strtolower(implode('\\', $this->parts));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Checks whether the identifier is a special class name (self, parent or static).
     *
     * @return bool Whether identifier is a special class name
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function isSpecialClassName(): bool {
        return isset(self::$specialClassNames[strtolower($this->name)]);
=======
    public function isSpecialClassName() : bool {
        return count($this->parts) === 1
            && isset(self::$specialClassNames[strtolower($this->parts[0])]);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function isSpecialClassName() : bool {
        return count($this->parts) === 1
            && isset(self::$specialClassNames[strtolower($this->parts[0])]);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Returns a string representation of the name by imploding the namespace parts with the
     * namespace separator.
     *
     * @return string String representation
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __toString(): string {
        return $this->name;
=======
    public function __toString() : string {
        return implode('\\', $this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __toString() : string {
        return implode('\\', $this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Gets a slice of a name (similar to array_slice).
     *
     * This method returns a new instance of the same type as the original and with the same
     * attributes.
     *
     * If the slice is empty, null is returned. The null value will be correctly handled in
     * concatenations using concat().
     *
     * Offset and length have the same meaning as in array_slice().
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param int $offset Offset to start the slice at (may be negative)
=======
     * @param int      $offset Offset to start the slice at (may be negative)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param int      $offset Offset to start the slice at (may be negative)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param int|null $length Length of the slice (may be negative)
     *
     * @return static|null Sliced name
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function slice(int $offset, ?int $length = null) {
        if ($offset === 1 && $length === null) {
            // Short-circuit the common case.
            if (false !== $pos = \strpos($this->name, '\\')) {
                return new static(\substr($this->name, $pos + 1));
            }
            return null;
        }

        $parts = \explode('\\', $this->name);
        $numParts = \count($parts);
=======
    public function slice(int $offset, int $length = null) {
        $numParts = count($this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function slice(int $offset, int $length = null) {
        $numParts = count($this->parts);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $realOffset = $offset < 0 ? $offset + $numParts : $offset;
        if ($realOffset < 0 || $realOffset > $numParts) {
            throw new \OutOfBoundsException(sprintf('Offset %d is out of bounds', $offset));
        }

        if (null === $length) {
            $realLength = $numParts - $realOffset;
        } else {
            $realLength = $length < 0 ? $length + $numParts - $realOffset : $length;
            if ($realLength < 0 || $realLength > $numParts - $realOffset) {
                throw new \OutOfBoundsException(sprintf('Length %d is out of bounds', $length));
            }
        }

        if ($realLength === 0) {
            // Empty slice is represented as null
            return null;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return new static(array_slice($parts, $realOffset, $realLength), $this->attributes);
=======
        return new static(array_slice($this->parts, $realOffset, $realLength), $this->attributes);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return new static(array_slice($this->parts, $realOffset, $realLength), $this->attributes);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Concatenate two names, yielding a new Name instance.
     *
     * The type of the generated instance depends on which class this method is called on, for
     * example Name\FullyQualified::concat() will yield a Name\FullyQualified instance.
     *
     * If one of the arguments is null, a new instance of the other name will be returned. If both
     * arguments are null, null will be returned. As such, writing
     *     Name::concat($namespace, $shortName)
     * where $namespace is a Name node or null will work as expected.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|string[]|self|null $name1 The first name
     * @param string|string[]|self|null $name2 The second name
     * @param array<string, mixed> $attributes Attributes to assign to concatenated name
=======
     * @param string|string[]|self|null $name1      The first name
     * @param string|string[]|self|null $name2      The second name
     * @param array                     $attributes Attributes to assign to concatenated name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param string|string[]|self|null $name1      The first name
     * @param string|string[]|self|null $name2      The second name
     * @param array                     $attributes Attributes to assign to concatenated name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return static|null Concatenated name
     */
    public static function concat($name1, $name2, array $attributes = []) {
        if (null === $name1 && null === $name2) {
            return null;
<<<<<<< HEAD
<<<<<<< HEAD
        }
        if (null === $name1) {
            return new static($name2, $attributes);
        }
        if (null === $name2) {
            return new static($name1, $attributes);
        } else {
            return new static(
                self::prepareName($name1) . '\\' . self::prepareName($name2), $attributes
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } elseif (null === $name1) {
            return new static(self::prepareName($name2), $attributes);
        } elseif (null === $name2) {
            return new static(self::prepareName($name1), $attributes);
        } else {
            return new static(
                array_merge(self::prepareName($name1), self::prepareName($name2)), $attributes
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }

    /**
     * Prepares a (string, array or Name node) name for use in name changing methods by converting
<<<<<<< HEAD
<<<<<<< HEAD
     * it to a string.
     *
     * @param string|string[]|self $name Name to prepare
     *
     * @return string Prepared name
     */
    private static function prepareName($name): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * it to an array.
     *
     * @param string|string[]|self $name Name to prepare
     *
     * @return string[] Prepared name
     */
    private static function prepareName($name) : array {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (\is_string($name)) {
            if ('' === $name) {
                throw new \InvalidArgumentException('Name cannot be empty');
            }

<<<<<<< HEAD
<<<<<<< HEAD
            return $name;
        }
        if (\is_array($name)) {
=======
            return explode('\\', $name);
        } elseif (\is_array($name)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            return explode('\\', $name);
        } elseif (\is_array($name)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if (empty($name)) {
                throw new \InvalidArgumentException('Name cannot be empty');
            }

<<<<<<< HEAD
<<<<<<< HEAD
            return implode('\\', $name);
        }
        if ($name instanceof self) {
            return $name->name;
=======
            return $name;
        } elseif ($name instanceof self) {
            return $name->parts;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            return $name;
        } elseif ($name instanceof self) {
            return $name->parts;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        throw new \InvalidArgumentException(
            'Expected string, array of parts or Name instance'
        );
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getType(): string {
=======
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Name';
    }
}
