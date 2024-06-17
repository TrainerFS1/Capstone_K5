<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

/**
 * Represents statements of type "expr;"
 */
<<<<<<< HEAD
class Expression extends Node\Stmt {
    /** @var Node\Expr Expression */
    public Node\Expr $expr;
=======
class Expression extends Node\Stmt
{
    /** @var Node\Expr Expression */
    public $expr;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs an expression statement.
     *
<<<<<<< HEAD
     * @param Node\Expr $expr Expression
     * @param array<string, mixed> $attributes Additional attributes
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
    public function getSubNodeNames(): array {
        return ['expr'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['expr'];
    }
    
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_Expression';
    }
}
