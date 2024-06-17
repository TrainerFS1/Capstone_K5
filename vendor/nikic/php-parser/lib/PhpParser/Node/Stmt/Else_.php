<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

<<<<<<< HEAD
<<<<<<< HEAD
class Else_ extends Node\Stmt {
    /** @var Node\Stmt[] Statements */
    public array $stmts;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Else_ extends Node\Stmt
{
    /** @var Node\Stmt[] Statements */
    public $stmts;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs an else node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Node\Stmt[] $stmts Statements
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param Node\Stmt[] $stmts      Statements
     * @param array       $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param Node\Stmt[] $stmts      Statements
     * @param array       $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $stmts = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->stmts = $stmts;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['stmts'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['stmts'];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_Else';
    }
}
