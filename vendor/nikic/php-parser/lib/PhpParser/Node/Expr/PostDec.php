<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

<<<<<<< HEAD
class PostDec extends Expr {
    /** @var Expr Variable */
    public Expr $var;
=======
class PostDec extends Expr
{
    /** @var Expr Variable */
    public $var;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a post decrement node.
     *
<<<<<<< HEAD
     * @param Expr $var Variable
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(Expr $var, array $attributes = []) {
        $this->attributes = $attributes;
        $this->var = $var;
    }

<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['var'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['var'];
    }
    
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_PostDec';
    }
}
