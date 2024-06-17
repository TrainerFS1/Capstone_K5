<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node\ArrayItem;
use PhpParser\Node\Expr;

class List_ extends Expr {
    // For use in "kind" attribute
    public const KIND_LIST = 1; // list() syntax
    public const KIND_ARRAY = 2; // [] syntax

    /** @var (ArrayItem|null)[] List of items to assign to */
    public array $items;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node\Expr;

class List_ extends Expr
{
    /** @var (ArrayItem|null)[] List of items to assign to */
    public $items;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a list() destructuring node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param (ArrayItem|null)[] $items List of items to assign to
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param (ArrayItem|null)[] $items      List of items to assign to
     * @param array              $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param (ArrayItem|null)[] $items      List of items to assign to
     * @param array              $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $items, array $attributes = []) {
        $this->attributes = $attributes;
        $this->items = $items;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['items'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['items'];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_List';
    }
}
