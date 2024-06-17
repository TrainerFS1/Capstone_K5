<?php declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
require __DIR__ . '/../ArrayItem.php';
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class ArrayItem extends Expr
{
    /** @var null|Expr Key */
    public $key;
    /** @var Expr Value */
    public $value;
    /** @var bool Whether to assign by reference */
    public $byRef;
    /** @var bool Whether to unpack the argument */
    public $unpack;

    /**
     * Constructs an array item node.
     *
     * @param Expr      $value      Value
     * @param null|Expr $key        Key
     * @param bool      $byRef      Whether to assign by reference
     * @param array     $attributes Additional attributes
     */
    public function __construct(Expr $value, Expr $key = null, bool $byRef = false, array $attributes = [], bool $unpack = false) {
        $this->attributes = $attributes;
        $this->key = $key;
        $this->value = $value;
        $this->byRef = $byRef;
        $this->unpack = $unpack;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value', 'byRef', 'unpack'];
    }

    public function getType() : string {
        return 'Expr_ArrayItem';
    }
}
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
