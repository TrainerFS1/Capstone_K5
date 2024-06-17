<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

<<<<<<< HEAD
<<<<<<< HEAD
class Unset_ extends Node\Stmt {
    /** @var Node\Expr[] Variables to unset */
    public array $vars;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Unset_ extends Node\Stmt
{
    /** @var Node\Expr[] Variables to unset */
    public $vars;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs an unset node.
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
        return 'Stmt_Unset';
    }
}
