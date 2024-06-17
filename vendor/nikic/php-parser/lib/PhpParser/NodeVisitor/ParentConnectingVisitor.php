<?php declare(strict_types=1);

namespace PhpParser\NodeVisitor;

<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

use function array_pop;
use function count;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function array_pop;
use function count;
use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
<<<<<<< HEAD
<<<<<<< HEAD
final class ParentConnectingVisitor extends NodeVisitorAbstract {
    /**
     * @var Node[]
     */
    private array $stack = [];

    public function beforeTraverse(array $nodes) {
        $this->stack = [];
    }

    public function enterNode(Node $node) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
final class ParentConnectingVisitor extends NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];

    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }

    public function enterNode(Node $node)
    {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[count($this->stack) - 1]);
        }

        $this->stack[] = $node;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function leaveNode(Node $node) {
=======
    public function leaveNode(Node $node)
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function leaveNode(Node $node)
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        array_pop($this->stack);
    }
}
