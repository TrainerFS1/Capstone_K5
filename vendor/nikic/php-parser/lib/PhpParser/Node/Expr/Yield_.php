<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

<<<<<<< HEAD
<<<<<<< HEAD
class Yield_ extends Expr {
    /** @var null|Expr Key expression */
    public ?Expr $key;
    /** @var null|Expr Value expression */
    public ?Expr $value;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Yield_ extends Expr
{
    /** @var null|Expr Key expression */
    public $key;
    /** @var null|Expr Value expression */
    public $value;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a yield expression node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param null|Expr $value Value expression
     * @param null|Expr $key Key expression
     * @param array<string, mixed> $attributes Additional attributes
     */
    public function __construct(?Expr $value = null, ?Expr $key = null, array $attributes = []) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param null|Expr $value      Value expression
     * @param null|Expr $key        Key expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(Expr $value = null, Expr $key = null, array $attributes = []) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->attributes = $attributes;
        $this->key = $key;
        $this->value = $value;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['key', 'value'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['key', 'value'];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_Yield';
    }
}
