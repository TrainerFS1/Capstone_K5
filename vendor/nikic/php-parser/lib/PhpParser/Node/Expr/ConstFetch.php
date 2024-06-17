<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;
use PhpParser\Node\Name;

<<<<<<< HEAD
class ConstFetch extends Expr {
    /** @var Name Constant name */
    public Name $name;
=======
class ConstFetch extends Expr
{
    /** @var Name Constant name */
    public $name;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a const fetch node.
     *
<<<<<<< HEAD
     * @param Name $name Constant name
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param Name  $name       Constant name
     * @param array $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(Name $name, array $attributes = []) {
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
        return 'Expr_ConstFetch';
    }
}
