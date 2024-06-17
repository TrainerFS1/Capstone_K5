<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node\Identifier;
use PhpParser\Node\Stmt;

<<<<<<< HEAD
<<<<<<< HEAD
class Label extends Stmt {
    /** @var Identifier Name */
    public Identifier $name;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Label extends Stmt
{
    /** @var Identifier Name */
    public $name;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a label node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|Identifier $name Name
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param string|Identifier $name       Name
     * @param array             $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param string|Identifier $name       Name
     * @param array             $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct($name, array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['name'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['name'];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_Label';
    }
}
