<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\CodeCleaner;

use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified as FullyQualifiedName;
use PhpParser\Node\Stmt\Namespace_;

/**
 * Abstract namespace-aware code cleaner pass.
 */
abstract class NamespaceAwarePass extends CodeCleanerPass
{
    protected $namespace;
    protected $currentScope;

    /**
     * @todo should this be final? Extending classes should be sure to either
     * use afterTraverse or call parent::beforeTraverse() when overloading.
     *
     * Reset the namespace and the current scope before beginning analysis
     *
     * @return Node[]|null Array of nodes
     */
    public function beforeTraverse(array $nodes)
    {
        $this->namespace = [];
        $this->currentScope = [];
    }

    /**
     * @todo should this be final? Extending classes should be sure to either use
     * leaveNode or call parent::enterNode() when overloading
     *
     * @param Node $node
     *
     * @return int|Node|null Replacement node (or special return value)
     */
    public function enterNode(Node $node)
    {
        if ($node instanceof Namespace_) {
<<<<<<< HEAD
<<<<<<< HEAD
            $this->namespace = isset($node->name) ? $this->getParts($node->name) : [];
=======
            $this->namespace = isset($node->name) ? $node->name->parts : [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->namespace = isset($node->name) ? $node->name->parts : [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }

    /**
     * Get a fully-qualified name (class, function, interface, etc).
     *
     * @param mixed $name
     */
    protected function getFullyQualifiedName($name): string
    {
        if ($name instanceof FullyQualifiedName) {
<<<<<<< HEAD
<<<<<<< HEAD
            return \implode('\\', $this->getParts($name));
        }

        if ($name instanceof Name) {
            $name = $this->getParts($name);
=======
            return \implode('\\', $name->parts);
        } elseif ($name instanceof Name) {
            $name = $name->parts;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            return \implode('\\', $name->parts);
        } elseif ($name instanceof Name) {
            $name = $name->parts;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } elseif (!\is_array($name)) {
            $name = [$name];
        }

        return \implode('\\', \array_merge($this->namespace, $name));
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Backwards compatibility shim for PHP-Parser 4.x.
     *
     * At some point we might want to make $namespace a plain string, to match how Name works?
     */
    protected function getParts(Name $name): array
    {
        return \method_exists($name, 'getParts') ? $name->getParts() : $name->parts;
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
