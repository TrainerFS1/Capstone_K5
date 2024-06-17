<?php declare(strict_types=1);

namespace PhpParser;

/**
 * @codeCoverageIgnore
 */
<<<<<<< HEAD
abstract class NodeVisitorAbstract implements NodeVisitor {
=======
class NodeVisitorAbstract implements NodeVisitor
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function beforeTraverse(array $nodes) {
        return null;
    }

    public function enterNode(Node $node) {
        return null;
    }

    public function leaveNode(Node $node) {
        return null;
    }

    public function afterTraverse(array $nodes) {
        return null;
    }
}
