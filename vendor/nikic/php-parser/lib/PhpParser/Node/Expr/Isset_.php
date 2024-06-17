<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

<<<<<<< HEAD
class Isset_ extends Expr {
    /** @var Expr[] Variables */
    public array $vars;
=======
class Isset_ extends Expr
{
    /** @var Expr[] Variables */
    public $vars;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs an array node.
     *
<<<<<<< HEAD
     * @param Expr[] $vars Variables
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param Expr[] $vars       Variables
     * @param array  $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $vars, array $attributes = []) {
        $this->attributes = $attributes;
        $this->vars = $vars;
    }

<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['vars'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['vars'];
    }
    
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_Isset';
    }
}
