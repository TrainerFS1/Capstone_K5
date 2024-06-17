<?php declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser\Builder;
use PhpParser\BuilderHelpers;
use PhpParser\Node;
use PhpParser\Node\Stmt;

<<<<<<< HEAD
<<<<<<< HEAD
class Use_ implements Builder {
    protected Node\Name $name;
    /** @var Stmt\Use_::TYPE_* */
    protected int $type;
    protected ?string $alias = null;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Use_ implements Builder
{
    protected $name;
    protected $type;
    protected $alias = null;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates a name use (alias) builder.
     *
     * @param Node\Name|string $name Name of the entity (namespace, class, function, constant) to alias
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Stmt\Use_::TYPE_* $type One of the Stmt\Use_::TYPE_* constants
=======
     * @param int              $type One of the Stmt\Use_::TYPE_* constants
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param int              $type One of the Stmt\Use_::TYPE_* constants
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct($name, int $type) {
        $this->name = BuilderHelpers::normalizeName($name);
        $this->type = $type;
    }

    /**
     * Sets alias for used name.
     *
     * @param string $alias Alias to use (last component of full name by default)
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function as(string $alias) {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Returns the built node.
     *
     * @return Stmt\Use_ The built node
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getNode(): Node {
        return new Stmt\Use_([
            new Node\UseItem($this->name, $this->alias)
=======
    public function getNode() : Node {
        return new Stmt\Use_([
            new Stmt\UseUse($this->name, $this->alias)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getNode() : Node {
        return new Stmt\Use_([
            new Stmt\UseUse($this->name, $this->alias)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ], $this->type);
    }
}
