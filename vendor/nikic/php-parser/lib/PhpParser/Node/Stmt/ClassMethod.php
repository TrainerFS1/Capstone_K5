<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\FunctionLike;

class ClassMethod extends Node\Stmt implements FunctionLike {
    /** @var int Flags */
    public int $flags;
    /** @var bool Whether to return by reference */
    public bool $byRef;
    /** @var Node\Identifier Name */
    public Node\Identifier $name;
    /** @var Node\Param[] Parameters */
    public array $params;
    /** @var null|Node\Identifier|Node\Name|Node\ComplexType Return type */
    public ?Node $returnType;
    /** @var Node\Stmt[]|null Statements */
    public ?array $stmts;
    /** @var Node\AttributeGroup[] PHP attribute groups */
    public array $attrGroups;

    /** @var array<string, bool> */
    private static array $magicNames = [
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node;
use PhpParser\Node\FunctionLike;

class ClassMethod extends Node\Stmt implements FunctionLike
{
    /** @var int Flags */
    public $flags;
    /** @var bool Whether to return by reference */
    public $byRef;
    /** @var Node\Identifier Name */
    public $name;
    /** @var Node\Param[] Parameters */
    public $params;
    /** @var null|Node\Identifier|Node\Name|Node\ComplexType Return type */
    public $returnType;
    /** @var Node\Stmt[]|null Statements */
    public $stmts;
    /** @var Node\AttributeGroup[] PHP attribute groups */
    public $attrGroups;

    private static $magicNames = [
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        '__construct'   => true,
        '__destruct'    => true,
        '__call'        => true,
        '__callstatic'  => true,
        '__get'         => true,
        '__set'         => true,
        '__isset'       => true,
        '__unset'       => true,
        '__sleep'       => true,
        '__wakeup'      => true,
        '__tostring'    => true,
        '__set_state'   => true,
        '__clone'       => true,
        '__invoke'      => true,
        '__debuginfo'   => true,
        '__serialize'   => true,
        '__unserialize' => true,
    ];

    /**
     * Constructs a class method node.
     *
     * @param string|Node\Identifier $name Name
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array{
     *     flags?: int,
     *     byRef?: bool,
     *     params?: Node\Param[],
     *     returnType?: null|Node\Identifier|Node\Name|Node\ComplexType,
     *     stmts?: Node\Stmt[]|null,
     *     attrGroups?: Node\AttributeGroup[],
     * } $subNodes Array of the following optional subnodes:
     *             'flags       => 0              : Flags
     *             'byRef'      => false          : Whether to return by reference
     *             'params'     => array()        : Parameters
     *             'returnType' => null           : Return type
     *             'stmts'      => array()        : Statements
     *             'attrGroups' => array()        : PHP attribute groups
     * @param array<string, mixed> $attributes Additional attributes
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param array $subNodes   Array of the following optional subnodes:
     *                          'flags       => MODIFIER_PUBLIC: Flags
     *                          'byRef'      => false          : Whether to return by reference
     *                          'params'     => array()        : Parameters
     *                          'returnType' => null           : Return type
     *                          'stmts'      => array()        : Statements
     *                          'attrGroups' => array()        : PHP attribute groups
     * @param array $attributes Additional attributes
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct($name, array $subNodes = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->flags = $subNodes['flags'] ?? $subNodes['type'] ?? 0;
        $this->byRef = $subNodes['byRef'] ?? false;
        $this->name = \is_string($name) ? new Node\Identifier($name) : $name;
        $this->params = $subNodes['params'] ?? [];
<<<<<<< HEAD
<<<<<<< HEAD
        $this->returnType = $subNodes['returnType'] ?? null;
=======
        $returnType = $subNodes['returnType'] ?? null;
        $this->returnType = \is_string($returnType) ? new Node\Identifier($returnType) : $returnType;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $returnType = $subNodes['returnType'] ?? null;
        $this->returnType = \is_string($returnType) ? new Node\Identifier($returnType) : $returnType;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->stmts = array_key_exists('stmts', $subNodes) ? $subNodes['stmts'] : [];
        $this->attrGroups = $subNodes['attrGroups'] ?? [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['attrGroups', 'flags', 'byRef', 'name', 'params', 'returnType', 'stmts'];
    }

    public function returnsByRef(): bool {
        return $this->byRef;
    }

    public function getParams(): array {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['attrGroups', 'flags', 'byRef', 'name', 'params', 'returnType', 'stmts'];
    }

    public function returnsByRef() : bool {
        return $this->byRef;
    }

    public function getParams() : array {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->params;
    }

    public function getReturnType() {
        return $this->returnType;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getStmts(): ?array {
        return $this->stmts;
    }

    public function getAttrGroups(): array {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getStmts() {
        return $this->stmts;
    }

    public function getAttrGroups() : array {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->attrGroups;
    }

    /**
     * Whether the method is explicitly or implicitly public.
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
     * Whether the method is protected.
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
     * Whether the method is private.
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
     * Whether the method is abstract.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isAbstract(): bool {
        return (bool) ($this->flags & Modifiers::ABSTRACT);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isAbstract() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_ABSTRACT);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Whether the method is final.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isFinal(): bool {
        return (bool) ($this->flags & Modifiers::FINAL);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isFinal() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_FINAL);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Whether the method is static.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isStatic(): bool {
        return (bool) ($this->flags & Modifiers::STATIC);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isStatic() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_STATIC);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Whether the method is magic.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function isMagic(): bool {
        return isset(self::$magicNames[$this->name->toLowerString()]);
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function isMagic() : bool {
        return isset(self::$magicNames[$this->name->toLowerString()]);
    }

    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_ClassMethod';
    }
}
