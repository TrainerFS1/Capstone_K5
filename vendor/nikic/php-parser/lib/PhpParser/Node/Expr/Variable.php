<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

<<<<<<< HEAD
class Variable extends Expr {
=======
class Variable extends Expr
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /** @var string|Expr Name */
    public $name;

    /**
     * Constructs a variable node.
     *
<<<<<<< HEAD
     * @param string|Expr $name Name
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param string|Expr $name       Name
     * @param array       $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct($name, array $attributes = []) {
        $this->attributes = $attributes;
        $this->name = $name;
    }

<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['name'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['name'];
    }
    
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_Variable';
    }
}
