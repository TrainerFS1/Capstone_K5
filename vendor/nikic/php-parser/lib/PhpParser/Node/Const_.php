<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\NodeAbstract;

<<<<<<< HEAD
<<<<<<< HEAD
class Const_ extends NodeAbstract {
    /** @var Identifier Name */
    public Identifier $name;
    /** @var Expr Value */
    public Expr $value;

    /** @var Name|null Namespaced name (if using NameResolver) */
    public ?Name $namespacedName;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Const_ extends NodeAbstract
{
    /** @var Identifier Name */
    public $name;
    /** @var Expr Value */
    public $value;

    /** @var Name|null Namespaced name (if using NameResolver) */
    public $namespacedName;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a const node for use in class const and const statements.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|Identifier $name Name
     * @param Expr $value Value
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param string|Identifier $name       Name
     * @param Expr              $value      Value
     * @param array             $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param string|Identifier $name       Name
     * @param Expr              $value      Value
     * @param array             $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct($name, Expr $value, array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->value = $value;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['name', 'value'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['name', 'value'];
    }

    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Const';
    }
}
