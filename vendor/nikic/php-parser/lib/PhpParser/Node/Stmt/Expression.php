<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

/**
 * Represents statements of type "expr;"
 */
<<<<<<< HEAD
<<<<<<< HEAD
class Expression extends Node\Stmt {
    /** @var Node\Expr Expression */
    public Node\Expr $expr;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Expression extends Node\Stmt
{
    /** @var Node\Expr Expression */
    public $expr;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs an expression statement.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Node\Expr $expr Expression
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(Node\Expr $expr, array $attributes = []) {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['expr'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['expr'];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_Expression';
    }
}
