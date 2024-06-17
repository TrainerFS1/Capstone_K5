<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\Node;
use PhpParser\NodeAbstract;

<<<<<<< HEAD
<<<<<<< HEAD
class Attribute extends NodeAbstract {
    /** @var Name Attribute name */
    public Name $name;

    /** @var list<Arg> Attribute arguments */
    public array $args;

    /**
     * @param Node\Name $name Attribute name
     * @param list<Arg> $args Attribute arguments
     * @param array<string, mixed> $attributes Additional node attributes
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Attribute extends NodeAbstract
{
    /** @var Name Attribute name */
    public $name;

    /** @var Arg[] Attribute arguments */
    public $args;

    /**
     * @param Node\Name $name       Attribute name
     * @param Arg[]     $args       Attribute arguments
     * @param array     $attributes Additional node attributes
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(Name $name, array $args = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = $name;
        $this->args = $args;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['name', 'args'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['name', 'args'];
    }

    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Attribute';
    }
}
