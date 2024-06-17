<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Modifiers;
use PhpParser\Node;

class ClassConst extends Node\Stmt {
    /** @var int Modifiers */
    public int $flags;
    /** @var Node\Const_[] Constant declarations */
    public array $consts;
    /** @var Node\AttributeGroup[] PHP attribute groups */
    public array $attrGroups;
    /** @var Node\Identifier|Node\Name|Node\ComplexType|null Type declaration */
    public ?Node $type;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node;

class ClassConst extends Node\Stmt
{
    /** @var int Modifiers */
    public $flags;
    /** @var Node\Const_[] Constant declarations */
    public $consts;
    /** @var Node\AttributeGroup[] */
    public $attrGroups;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a class const list node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Node\Const_[] $consts Constant declarations
     * @param int $flags Modifiers
     * @param array<string, mixed> $attributes Additional attributes
     * @param list<Node\AttributeGroup> $attrGroups PHP attribute groups
     * @param null|Node\Identifier|Node\Name|Node\ComplexType $type Type declaration
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param Node\Const_[]         $consts     Constant declarations
     * @param int                   $flags      Modifiers
     * @param array                 $attributes Additional attributes
     * @param Node\AttributeGroup[] $attrGroups PHP attribute groups
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(
        array $consts,
        int $flags = 0,
        array $attributes = [],
<<<<<<< HEAD
<<<<<<< HEAD
        array $attrGroups = [],
        ?Node $type = null
=======
        array $attrGroups = []
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        array $attrGroups = []
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ) {
        $this->attributes = $attributes;
        $this->flags = $flags;
        $this->consts = $consts;
        $this->attrGroups = $attrGroups;
<<<<<<< HEAD
<<<<<<< HEAD
        $this->type = $type;
    }

    public function getSubNodeNames(): array {
        return ['attrGroups', 'flags', 'type', 'consts'];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getSubNodeNames() : array {
        return ['attrGroups', 'flags', 'consts'];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Whether constant is explicitly or implicitly public.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isPublic(): bool {
        return ($this->flags & Modifiers::PUBLIC) !== 0
            || ($this->flags & Modifiers::VISIBILITY_MASK) === 0;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isPublic() : bool {
        return ($this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || ($this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Whether constant is protected.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isProtected(): bool {
        return (bool) ($this->flags & Modifiers::PROTECTED);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_PROTECTED);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Whether constant is private.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isPrivate(): bool {
        return (bool) ($this->flags & Modifiers::PRIVATE);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_PRIVATE);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Whether constant is final.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isFinal(): bool {
        return (bool) ($this->flags & Modifiers::FINAL);
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isFinal() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_FINAL);
    }

    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_ClassConst';
    }
}
