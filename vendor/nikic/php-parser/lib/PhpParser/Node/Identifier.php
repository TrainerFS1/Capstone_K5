<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\NodeAbstract;

/**
 * Represents a non-namespaced name. Namespaced names are represented using Name nodes.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class Identifier extends NodeAbstract {
    /** @var string Identifier as string */
    public string $name;

    /** @var array<string, bool> */
    private static array $specialClassNames = [
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Identifier extends NodeAbstract
{
    /** @var string Identifier as string */
    public $name;

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
     * Constructs an identifier node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $name Identifier as string
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param string $name       Identifier as string
     * @param array  $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param string $name       Identifier as string
     * @param array  $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(string $name, array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = $name;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
=======
    public function getSubNodeNames() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getSubNodeNames() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return ['name'];
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function toString(): string {
=======
    public function toString() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function toString() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->name;
    }

    /**
     * Get lowercased identifier as string.
     *
     * @return string Lowercased identifier as string
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function toLowerString(): string {
=======
    public function toLowerString() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function toLowerString() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return strtolower($this->name);
    }

    /**
     * Checks whether the identifier is a special class name (self, parent or static).
     *
     * @return bool Whether identifier is a special class name
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function isSpecialClassName(): bool {
=======
    public function isSpecialClassName() : bool {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function isSpecialClassName() : bool {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return isset(self::$specialClassNames[strtolower($this->name)]);
    }

    /**
     * Get identifier as string.
     *
     * @return string Identifier as string
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __toString(): string {
        return $this->name;
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __toString() : string {
        return $this->name;
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Identifier';
    }
}
