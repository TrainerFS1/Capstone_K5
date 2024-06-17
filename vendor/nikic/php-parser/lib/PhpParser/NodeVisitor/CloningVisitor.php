<?php declare(strict_types=1);

namespace PhpParser\NodeVisitor;

use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class CloningVisitor extends NodeVisitorAbstract {
=======
class CloningVisitor extends NodeVisitorAbstract
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class CloningVisitor extends NodeVisitorAbstract
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function enterNode(Node $origNode) {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
