<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Extractor\Visitor;

use PhpParser\Node;
use PhpParser\NodeVisitor;

/**
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
 */
final class TransMethodVisitor extends AbstractVisitor implements NodeVisitor
{
    public function beforeTraverse(array $nodes): ?Node
    {
        return null;
    }

    public function enterNode(Node $node): ?Node
    {
<<<<<<< HEAD
        return null;
    }

    public function leaveNode(Node $node): ?Node
    {
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!$node instanceof Node\Expr\MethodCall && !$node instanceof Node\Expr\FuncCall) {
            return null;
        }

        if (!\is_string($node->name) && !$node->name instanceof Node\Identifier && !$node->name instanceof Node\Name) {
            return null;
        }

<<<<<<< HEAD
        $name = $node->name instanceof Node\Name ? $node->name->getLast() : (string) $node->name;
=======
        $name = (string) $node->name;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        if ('trans' === $name || 't' === $name) {
            $firstNamedArgumentIndex = $this->nodeFirstNamedArgumentIndex($node);

            if (!$messages = $this->getStringArguments($node, 0 < $firstNamedArgumentIndex ? 0 : 'message')) {
                return null;
            }

            $domain = $this->getStringArguments($node, 2 < $firstNamedArgumentIndex ? 2 : 'domain')[0] ?? null;

            foreach ($messages as $message) {
                $this->addMessageToCatalogue($message, $domain, $node->getStartLine());
            }
        }

        return null;
    }

<<<<<<< HEAD
=======
    public function leaveNode(Node $node): ?Node
    {
        return null;
    }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function afterTraverse(array $nodes): ?Node
    {
        return null;
    }
}
