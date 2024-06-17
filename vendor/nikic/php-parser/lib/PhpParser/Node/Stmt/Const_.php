<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

<<<<<<< HEAD
class Const_ extends Node\Stmt {
    /** @var Node\Const_[] Constant declarations */
    public array $consts;
=======
class Const_ extends Node\Stmt
{
    /** @var Node\Const_[] Constant declarations */
    public $consts;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a const list node.
     *
<<<<<<< HEAD
     * @param Node\Const_[] $consts Constant declarations
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param Node\Const_[] $consts     Constant declarations
     * @param array         $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $consts, array $attributes = []) {
        $this->attributes = $attributes;
        $this->consts = $consts;
    }

<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['consts'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['consts'];
    }
    
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_Const';
    }
}
