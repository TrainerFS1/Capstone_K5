<?php declare(strict_types=1);

namespace PhpParser\NodeVisitor;

use PhpParser\Node;
<<<<<<< HEAD
use PhpParser\NodeVisitor;
=======
use PhpParser\NodeTraverser;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\NodeVisitorAbstract;

/**
 * This visitor can be used to find the first node satisfying some criterion determined by
 * a filter callback.
 */
<<<<<<< HEAD
class FirstFindingVisitor extends NodeVisitorAbstract {
    /** @var callable Filter callback */
    protected $filterCallback;
    /** @var null|Node Found node */
    protected ?Node $foundNode;
=======
class FirstFindingVisitor extends NodeVisitorAbstract
{
    /** @var callable Filter callback */
    protected $filterCallback;
    /** @var null|Node Found node */
    protected $foundNode;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    public function __construct(callable $filterCallback) {
        $this->filterCallback = $filterCallback;
    }

    /**
     * Get found node satisfying the filter callback.
     *
     * Returns null if no node satisfies the filter callback.
     *
     * @return null|Node Found node (or null if not found)
     */
<<<<<<< HEAD
    public function getFoundNode(): ?Node {
        return $this->foundNode;
    }

    public function beforeTraverse(array $nodes): ?array {
=======
    public function getFoundNode() {
        return $this->foundNode;
    }

    public function beforeTraverse(array $nodes) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->foundNode = null;

        return null;
    }

    public function enterNode(Node $node) {
        $filterCallback = $this->filterCallback;
        if ($filterCallback($node)) {
            $this->foundNode = $node;
<<<<<<< HEAD
            return NodeVisitor::STOP_TRAVERSAL;
=======
            return NodeTraverser::STOP_TRAVERSAL;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return null;
    }
}
