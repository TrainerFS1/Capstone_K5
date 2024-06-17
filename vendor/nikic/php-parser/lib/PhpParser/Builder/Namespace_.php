<?php declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser;
use PhpParser\BuilderHelpers;
use PhpParser\Node;
use PhpParser\Node\Stmt;

<<<<<<< HEAD
<<<<<<< HEAD
class Namespace_ extends Declaration {
    private ?Node\Name $name;
    /** @var Stmt[] */
    private array $stmts = [];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Namespace_ extends Declaration
{
    private $name;
    private $stmts = [];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates a namespace builder.
     *
     * @param Node\Name|string|null $name Name of the namespace
     */
    public function __construct($name) {
        $this->name = null !== $name ? BuilderHelpers::normalizeName($name) : null;
    }

    /**
     * Adds a statement.
     *
     * @param Node|PhpParser\Builder $stmt The statement to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmt($stmt) {
        $this->stmts[] = BuilderHelpers::normalizeStmt($stmt);

        return $this;
    }

    /**
     * Returns the built node.
     *
     * @return Stmt\Namespace_ The built node
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
        return new Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
