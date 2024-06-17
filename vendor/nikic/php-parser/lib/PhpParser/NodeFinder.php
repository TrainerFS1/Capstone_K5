<?php declare(strict_types=1);

namespace PhpParser;

use PhpParser\NodeVisitor\FindingVisitor;
use PhpParser\NodeVisitor\FirstFindingVisitor;

<<<<<<< HEAD
<<<<<<< HEAD
class NodeFinder {
    /**
     * Find all nodes satisfying a filter callback.
     *
     * @param Node|Node[] $nodes Single node or array of nodes to search in
     * @param callable $filter Filter callback: function(Node $node) : bool
     *
     * @return Node[] Found nodes satisfying the filter callback
     */
    public function find($nodes, callable $filter): array {
        if ($nodes === []) {
            return [];
        }

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class NodeFinder
{
    /**
     * Find all nodes satisfying a filter callback.
     *
     * @param Node|Node[] $nodes  Single node or array of nodes to search in
     * @param callable    $filter Filter callback: function(Node $node) : bool
     *
     * @return Node[] Found nodes satisfying the filter callback
     */
    public function find($nodes, callable $filter) : array {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!is_array($nodes)) {
            $nodes = [$nodes];
        }

        $visitor = new FindingVisitor($filter);

<<<<<<< HEAD
<<<<<<< HEAD
        $traverser = new NodeTraverser($visitor);
=======
        $traverser = new NodeTraverser;
        $traverser->addVisitor($visitor);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $traverser = new NodeTraverser;
        $traverser->addVisitor($visitor);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $traverser->traverse($nodes);

        return $visitor->getFoundNodes();
    }

    /**
     * Find all nodes that are instances of a certain class.
<<<<<<< HEAD
<<<<<<< HEAD

     * @template TNode as Node
     *
     * @param Node|Node[] $nodes Single node or array of nodes to search in
     * @param class-string<TNode> $class Class name
     *
     * @return TNode[] Found nodes (all instances of $class)
     */
    public function findInstanceOf($nodes, string $class): array {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @param Node|Node[] $nodes Single node or array of nodes to search in
     * @param string      $class Class name
     *
     * @return Node[] Found nodes (all instances of $class)
     */
    public function findInstanceOf($nodes, string $class) : array {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->find($nodes, function ($node) use ($class) {
            return $node instanceof $class;
        });
    }

    /**
     * Find first node satisfying a filter callback.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Node|Node[] $nodes Single node or array of nodes to search in
     * @param callable $filter Filter callback: function(Node $node) : bool
     *
     * @return null|Node Found node (or null if none found)
     */
    public function findFirst($nodes, callable $filter): ?Node {
        if ($nodes === []) {
            return null;
        }

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param Node|Node[] $nodes  Single node or array of nodes to search in
     * @param callable    $filter Filter callback: function(Node $node) : bool
     *
     * @return null|Node Found node (or null if none found)
     */
    public function findFirst($nodes, callable $filter) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!is_array($nodes)) {
            $nodes = [$nodes];
        }

        $visitor = new FirstFindingVisitor($filter);

<<<<<<< HEAD
<<<<<<< HEAD
        $traverser = new NodeTraverser($visitor);
=======
        $traverser = new NodeTraverser;
        $traverser->addVisitor($visitor);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $traverser = new NodeTraverser;
        $traverser->addVisitor($visitor);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $traverser->traverse($nodes);

        return $visitor->getFoundNode();
    }

    /**
     * Find first node that is an instance of a certain class.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @template TNode as Node
     *
     * @param Node|Node[] $nodes Single node or array of nodes to search in
     * @param class-string<TNode> $class Class name
     *
     * @return null|TNode Found node, which is an instance of $class (or null if none found)
     */
    public function findFirstInstanceOf($nodes, string $class): ?Node {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param Node|Node[] $nodes  Single node or array of nodes to search in
     * @param string      $class Class name
     *
     * @return null|Node Found node, which is an instance of $class (or null if none found)
     */
    public function findFirstInstanceOf($nodes, string $class) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->findFirst($nodes, function ($node) use ($class) {
            return $node instanceof $class;
        });
    }
}
