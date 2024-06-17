<?php

declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser;
use PhpParser\BuilderHelpers;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Modifiers;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node;
use PhpParser\Node\Const_;
use PhpParser\Node\Identifier;
use PhpParser\Node\Stmt;

<<<<<<< HEAD
<<<<<<< HEAD
class ClassConst implements PhpParser\Builder {
    protected int $flags = 0;
    /** @var array<string, mixed> */
    protected array $attributes = [];
    /** @var list<Const_> */
    protected array $constants = [];

    /** @var list<Node\AttributeGroup> */
    protected array $attributeGroups = [];
    /** @var Identifier|Node\Name|Node\ComplexType|null */
    protected ?Node $type = null;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class ClassConst implements PhpParser\Builder
{
    protected $flags = 0;
    protected $attributes = [];
    protected $constants = [];

    /** @var Node\AttributeGroup[] */
    protected $attributeGroups = [];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates a class constant builder
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|Identifier $name Name
=======
     * @param string|Identifier                          $name  Name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param string|Identifier                          $name  Name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param Node\Expr|bool|null|int|float|string|array $value Value
     */
    public function __construct($name, $value) {
        $this->constants = [new Const_($name, BuilderHelpers::normalizeValue($value))];
    }

    /**
     * Add another constant to const group
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|Identifier $name Name
=======
     * @param string|Identifier                          $name  Name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param string|Identifier                          $name  Name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param Node\Expr|bool|null|int|float|string|array $value Value
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addConst($name, $value) {
        $this->constants[] = new Const_($name, BuilderHelpers::normalizeValue($value));

        return $this;
    }

    /**
     * Makes the constant public.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makePublic() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::PUBLIC);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PUBLIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PUBLIC);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Makes the constant protected.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeProtected() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::PROTECTED);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PROTECTED);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PROTECTED);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Makes the constant private.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makePrivate() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::PRIVATE);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PRIVATE);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_PRIVATE);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Makes the constant final.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeFinal() {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->flags = BuilderHelpers::addModifier($this->flags, Modifiers::FINAL);
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_FINAL);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->flags = BuilderHelpers::addModifier($this->flags, Stmt\Class_::MODIFIER_FINAL);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    /**
     * Sets doc comment for the constant.
     *
     * @param PhpParser\Comment\Doc|string $docComment Doc comment to set
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setDocComment($docComment) {
        $this->attributes = [
            'comments' => [BuilderHelpers::normalizeDocComment($docComment)]
        ];

        return $this;
    }

    /**
     * Adds an attribute group.
     *
     * @param Node\Attribute|Node\AttributeGroup $attribute
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addAttribute($attribute) {
        $this->attributeGroups[] = BuilderHelpers::normalizeAttribute($attribute);

        return $this;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Sets the constant type.
     *
     * @param string|Node\Name|Identifier|Node\ComplexType $type
     *
     * @return $this
     */
    public function setType($type) {
        $this->type = BuilderHelpers::normalizeType($type);

        return $this;
    }

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Returns the built class node.
     *
     * @return Stmt\ClassConst The built constant node
     */
    public function getNode(): PhpParser\Node {
        return new Stmt\ClassConst(
            $this->constants,
            $this->flags,
            $this->attributes,
<<<<<<< HEAD
<<<<<<< HEAD
            $this->attributeGroups,
            $this->type
=======
            $this->attributeGroups
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->attributeGroups
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
