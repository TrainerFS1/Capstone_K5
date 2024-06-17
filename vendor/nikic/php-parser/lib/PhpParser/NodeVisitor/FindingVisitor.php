<?php declare(strict_types=1);

namespace PhpParser\NodeVisitor;

use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

/**
 * This visitor can be used to find and collect all nodes satisfying some criterion determined by
 * a filter callback.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class FindingVisitor extends NodeVisitorAbstract {
    /** @var callable Filter callback */
    protected $filterCallback;
    /** @var Node[] Found nodes */
    protected array $foundNodes;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class FindingVisitor extends NodeVisitorAbstract
{
    /** @var callable Filter callback */
    protected $filterCallback;
    /** @var Node[] Found nodes */
    protected $foundNodes;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    public function __construct(callable $filterCallback) {
        $this->filterCallback = $filterCallback;
    }

    /**
     * Get found nodes satisfying the filter callback.
     *
     * Nodes are returned in pre-order.
     *
     * @return Node[] Found nodes
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFoundNodes(): array {
        return $this->foundNodes;
    }

    public function beforeTraverse(array $nodes): ?array {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getFoundNodes() : array {
        return $this->foundNodes;
    }

    public function beforeTraverse(array $nodes) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->foundNodes = [];

        return null;
    }

    public function enterNode(Node $node) {
        $filterCallback = $this->filterCallback;
        if ($filterCallback($node)) {
            $this->foundNodes[] = $node;
        }

        return null;
    }
}
