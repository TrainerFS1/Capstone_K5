<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

<<<<<<< HEAD
class TryCatch extends Node\Stmt {
    /** @var Node\Stmt[] Statements */
    public array $stmts;
    /** @var Catch_[] Catches */
    public array $catches;
    /** @var null|Finally_ Optional finally node */
    public ?Finally_ $finally;
=======
class TryCatch extends Node\Stmt
{
    /** @var Node\Stmt[] Statements */
    public $stmts;
    /** @var Catch_[] Catches */
    public $catches;
    /** @var null|Finally_ Optional finally node */
    public $finally;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a try catch node.
     *
<<<<<<< HEAD
     * @param Node\Stmt[] $stmts Statements
     * @param Catch_[] $catches Catches
     * @param null|Finally_ $finally Optional finally node
     * @param array<string, mixed> $attributes Additional attributes
     */
    public function __construct(array $stmts, array $catches, ?Finally_ $finally = null, array $attributes = []) {
=======
     * @param Node\Stmt[]   $stmts      Statements
     * @param Catch_[]      $catches    Catches
     * @param null|Finally_ $finally    Optional finally node
     * @param array         $attributes Additional attributes
     */
    public function __construct(array $stmts, array $catches, Finally_ $finally = null, array $attributes = []) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->attributes = $attributes;
        $this->stmts = $stmts;
        $this->catches = $catches;
        $this->finally = $finally;
    }

<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['stmts', 'catches', 'finally'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['stmts', 'catches', 'finally'];
    }

    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_TryCatch';
    }
}
