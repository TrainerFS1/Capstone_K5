<?php declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser\Builder;
use PhpParser\BuilderHelpers;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Stmt;

class TraitUseAdaptation implements Builder {
    private const TYPE_UNDEFINED  = 0;
    private const TYPE_ALIAS      = 1;
    private const TYPE_PRECEDENCE = 2;

    protected int $type;
    protected ?Node\Name $trait;
    protected Node\Identifier $method;
    protected ?int $modifier = null;
    protected ?Node\Identifier $alias = null;
    /** @var Node\Name[] */
    protected array $insteadof = [];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node;
use PhpParser\Node\Stmt;

class TraitUseAdaptation implements Builder
{
    const TYPE_UNDEFINED  = 0;
    const TYPE_ALIAS      = 1;
    const TYPE_PRECEDENCE = 2;

    /** @var int Type of building adaptation */
    protected $type;

    protected $trait;
    protected $method;

    protected $modifier = null;
    protected $alias = null;

    protected $insteadof = [];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates a trait use adaptation builder.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Node\Name|string|null $trait Name of adapted trait
     * @param Node\Identifier|string $method Name of adapted method
=======
     * @param Node\Name|string|null  $trait  Name of adaptated trait
     * @param Node\Identifier|string $method Name of adaptated method
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param Node\Name|string|null  $trait  Name of adaptated trait
     * @param Node\Identifier|string $method Name of adaptated method
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct($trait, $method) {
        $this->type = self::TYPE_UNDEFINED;

<<<<<<< HEAD
<<<<<<< HEAD
        $this->trait = is_null($trait) ? null : BuilderHelpers::normalizeName($trait);
=======
        $this->trait = is_null($trait)? null: BuilderHelpers::normalizeName($trait);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->trait = is_null($trait)? null: BuilderHelpers::normalizeName($trait);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->method = BuilderHelpers::normalizeIdentifier($method);
    }

    /**
     * Sets alias of method.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Node\Identifier|string $alias Alias for adapted method
=======
     * @param Node\Identifier|string $alias Alias for adaptated method
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param Node\Identifier|string $alias Alias for adaptated method
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function as($alias) {
        if ($this->type === self::TYPE_UNDEFINED) {
            $this->type = self::TYPE_ALIAS;
        }

        if ($this->type !== self::TYPE_ALIAS) {
            throw new \LogicException('Cannot set alias for not alias adaptation buider');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->alias = BuilderHelpers::normalizeIdentifier($alias);
=======
        $this->alias = $alias;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->alias = $alias;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Sets adapted method public.
=======
     * Sets adaptated method public.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * Sets adaptated method public.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makePublic() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->setModifier(Modifiers::PUBLIC);
=======
        $this->setModifier(Stmt\Class_::MODIFIER_PUBLIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->setModifier(Stmt\Class_::MODIFIER_PUBLIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Sets adapted method protected.
=======
     * Sets adaptated method protected.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * Sets adaptated method protected.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeProtected() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->setModifier(Modifiers::PROTECTED);
=======
        $this->setModifier(Stmt\Class_::MODIFIER_PROTECTED);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->setModifier(Stmt\Class_::MODIFIER_PROTECTED);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Sets adapted method private.
=======
     * Sets adaptated method private.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * Sets adaptated method private.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makePrivate() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->setModifier(Modifiers::PRIVATE);
=======
        $this->setModifier(Stmt\Class_::MODIFIER_PRIVATE);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->setModifier(Stmt\Class_::MODIFIER_PRIVATE);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this;
    }

    /**
     * Adds overwritten traits.
     *
     * @param Node\Name|string ...$traits Traits for overwrite
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function insteadof(...$traits) {
        if ($this->type === self::TYPE_UNDEFINED) {
            if (is_null($this->trait)) {
                throw new \LogicException('Precedence adaptation must have trait');
            }

            $this->type = self::TYPE_PRECEDENCE;
        }

        if ($this->type !== self::TYPE_PRECEDENCE) {
            throw new \LogicException('Cannot add overwritten traits for not precedence adaptation buider');
        }

        foreach ($traits as $trait) {
            $this->insteadof[] = BuilderHelpers::normalizeName($trait);
        }

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    protected function setModifier(int $modifier): void {
=======
    protected function setModifier(int $modifier) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected function setModifier(int $modifier) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($this->type === self::TYPE_UNDEFINED) {
            $this->type = self::TYPE_ALIAS;
        }

        if ($this->type !== self::TYPE_ALIAS) {
            throw new \LogicException('Cannot set access modifier for not alias adaptation buider');
        }

        if (is_null($this->modifier)) {
            $this->modifier = $modifier;
        } else {
            throw new \LogicException('Multiple access type modifiers are not allowed');
        }
    }

    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getNode(): Node {
=======
    public function getNode() : Node {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getNode() : Node {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        switch ($this->type) {
            case self::TYPE_ALIAS:
                return new Stmt\TraitUseAdaptation\Alias($this->trait, $this->method, $this->modifier, $this->alias);
            case self::TYPE_PRECEDENCE:
                return new Stmt\TraitUseAdaptation\Precedence($this->trait, $this->method, $this->insteadof);
            default:
                throw new \LogicException('Type of adaptation is not defined');
        }
    }
}
