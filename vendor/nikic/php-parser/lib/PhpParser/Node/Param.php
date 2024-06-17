<?php declare(strict_types=1);

namespace PhpParser\Node;

<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\NodeAbstract;

class Param extends NodeAbstract {
    /** @var null|Identifier|Name|ComplexType Type declaration */
    public ?Node $type;
    /** @var bool Whether parameter is passed by reference */
    public bool $byRef;
    /** @var bool Whether this is a variadic argument */
    public bool $variadic;
    /** @var Expr\Variable|Expr\Error Parameter variable */
    public Expr $var;
    /** @var null|Expr Default value */
    public ?Expr $default;
    /** @var int Optional visibility flags */
    public int $flags;
    /** @var AttributeGroup[] PHP attribute groups */
    public array $attrGroups;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\NodeAbstract;

class Param extends NodeAbstract
{
    /** @var null|Identifier|Name|ComplexType Type declaration */
    public $type;
    /** @var bool Whether parameter is passed by reference */
    public $byRef;
    /** @var bool Whether this is a variadic argument */
    public $variadic;
    /** @var Expr\Variable|Expr\Error Parameter variable */
    public $var;
    /** @var null|Expr Default value */
    public $default;
    /** @var int */
    public $flags;
    /** @var AttributeGroup[] PHP attribute groups */
    public $attrGroups;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a parameter node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Expr\Variable|Expr\Error $var Parameter variable
     * @param null|Expr $default Default value
     * @param null|Identifier|Name|ComplexType $type Type declaration
     * @param bool $byRef Whether is passed by reference
     * @param bool $variadic Whether this is a variadic argument
     * @param array<string, mixed> $attributes Additional attributes
     * @param int $flags Optional visibility flags
     * @param list<AttributeGroup> $attrGroups PHP attribute groups
     */
    public function __construct(
        Expr $var, ?Expr $default = null, ?Node $type = null,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param Expr\Variable|Expr\Error                $var        Parameter variable
     * @param null|Expr                               $default    Default value
     * @param null|string|Identifier|Name|ComplexType $type       Type declaration
     * @param bool                                    $byRef      Whether is passed by reference
     * @param bool                                    $variadic   Whether this is a variadic argument
     * @param array                                   $attributes Additional attributes
     * @param int                                     $flags      Optional visibility flags
     * @param AttributeGroup[]                        $attrGroups PHP attribute groups
     */
    public function __construct(
        $var, Expr $default = null, $type = null,
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        bool $byRef = false, bool $variadic = false,
        array $attributes = [],
        int $flags = 0,
        array $attrGroups = []
    ) {
        $this->attributes = $attributes;
<<<<<<< HEAD
<<<<<<< HEAD
        $this->type = $type;
=======
        $this->type = \is_string($type) ? new Identifier($type) : $type;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->type = \is_string($type) ? new Identifier($type) : $type;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->byRef = $byRef;
        $this->variadic = $variadic;
        $this->var = $var;
        $this->default = $default;
        $this->flags = $flags;
        $this->attrGroups = $attrGroups;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['attrGroups', 'flags', 'type', 'byRef', 'variadic', 'var', 'default'];
    }

    public function getType(): string {
        return 'Param';
    }

    /**
     * Whether this parameter uses constructor property promotion.
     */
    public function isPromoted(): bool {
        return $this->flags !== 0;
    }

    public function isPublic(): bool {
        return (bool) ($this->flags & Modifiers::PUBLIC);
    }

    public function isProtected(): bool {
        return (bool) ($this->flags & Modifiers::PROTECTED);
    }

    public function isPrivate(): bool {
        return (bool) ($this->flags & Modifiers::PRIVATE);
    }

    public function isReadonly(): bool {
        return (bool) ($this->flags & Modifiers::READONLY);
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['attrGroups', 'flags', 'type', 'byRef', 'variadic', 'var', 'default'];
    }

    public function getType() : string {
        return 'Param';
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
