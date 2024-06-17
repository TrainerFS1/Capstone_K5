<?php declare(strict_types=1);

namespace PhpParser;

<<<<<<< HEAD
interface NodeTraverserInterface {
=======
interface NodeTraverserInterface
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * Adds a visitor.
     *
     * @param NodeVisitor $visitor Visitor to add
     */
<<<<<<< HEAD
    public function addVisitor(NodeVisitor $visitor): void;

    /**
     * Removes an added visitor.
     */
    public function removeVisitor(NodeVisitor $visitor): void;
=======
    public function addVisitor(NodeVisitor $visitor);

    /**
     * Removes an added visitor.
     *
     * @param NodeVisitor $visitor
     */
    public function removeVisitor(NodeVisitor $visitor);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Traverses an array of nodes using the registered visitors.
     *
     * @param Node[] $nodes Array of nodes
     *
     * @return Node[] Traversed array of nodes
     */
<<<<<<< HEAD
    public function traverse(array $nodes): array;
=======
    public function traverse(array $nodes) : array;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
