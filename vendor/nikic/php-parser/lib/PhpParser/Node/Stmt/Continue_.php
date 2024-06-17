<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

<<<<<<< HEAD
class Continue_ extends Node\Stmt {
    /** @var null|Node\Expr Number of loops to continue */
    public ?Node\Expr $num;
=======
class Continue_ extends Node\Stmt
{
    /** @var null|Node\Expr Number of loops to continue */
    public $num;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a continue node.
     *
<<<<<<< HEAD
     * @param null|Node\Expr $num Number of loops to continue
     * @param array<string, mixed> $attributes Additional attributes
     */
    public function __construct(?Node\Expr $num = null, array $attributes = []) {
=======
     * @param null|Node\Expr $num        Number of loops to continue
     * @param array          $attributes Additional attributes
     */
    public function __construct(Node\Expr $num = null, array $attributes = []) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->attributes = $attributes;
        $this->num = $num;
    }

<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['num'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['num'];
    }
    
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_Continue';
    }
}
