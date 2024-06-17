<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;
use PhpParser\Node\AttributeGroup;

<<<<<<< HEAD
class EnumCase extends Node\Stmt {
    /** @var Node\Identifier Enum case name */
    public Node\Identifier $name;
    /** @var Node\Expr|null Enum case expression */
    public ?Node\Expr $expr;
    /** @var Node\AttributeGroup[] PHP attribute groups */
    public array $attrGroups;

    /**
     * @param string|Node\Identifier $name Enum case name
     * @param Node\Expr|null $expr Enum case expression
     * @param list<AttributeGroup> $attrGroups PHP attribute groups
     * @param array<string, mixed> $attributes Additional attributes
     */
    public function __construct($name, ?Node\Expr $expr = null, array $attrGroups = [], array $attributes = []) {
=======
class EnumCase extends Node\Stmt
{
    /** @var Node\Identifier Enum case name */
    public $name;
    /** @var Node\Expr|null Enum case expression */
    public $expr;
    /** @var Node\AttributeGroup[] PHP attribute groups */
    public $attrGroups;

    /**
     * @param string|Node\Identifier    $name       Enum case name
     * @param Node\Expr|null            $expr       Enum case expression
     * @param AttributeGroup[]          $attrGroups PHP attribute groups
     * @param array                     $attributes Additional attributes
     */
    public function __construct($name, Node\Expr $expr = null, array $attrGroups = [], array $attributes = []) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        parent::__construct($attributes);
        $this->name = \is_string($name) ? new Node\Identifier($name) : $name;
        $this->expr = $expr;
        $this->attrGroups = $attrGroups;
    }

<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['attrGroups', 'name', 'expr'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['attrGroups', 'name', 'expr'];
    }

    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_EnumCase';
    }
}
