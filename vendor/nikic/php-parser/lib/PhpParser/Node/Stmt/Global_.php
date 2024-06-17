<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

<<<<<<< HEAD
<<<<<<< HEAD
class Global_ extends Node\Stmt {
    /** @var Node\Expr[] Variables */
    public array $vars;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Global_ extends Node\Stmt
{
    /** @var Node\Expr[] Variables */
    public $vars;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a global variables list node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Node\Expr[] $vars Variables to unset
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param Node\Expr[] $vars       Variables to unset
     * @param array       $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param Node\Expr[] $vars       Variables to unset
     * @param array       $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $vars, array $attributes = []) {
        $this->attributes = $attributes;
        $this->vars = $vars;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['vars'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['vars'];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_Global';
    }
}
