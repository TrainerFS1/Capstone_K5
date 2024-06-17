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
final class TranslatableMessageVisitor extends AbstractVisitor implements NodeVisitor
{
    public function beforeTraverse(array $nodes): ?Node
    {
        return null;
    }

    public function enterNode(Node $node): ?Node
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return null;
    }

    public function leaveNode(Node $node): ?Node
    {
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!$node instanceof Node\Expr\New_) {
            return null;
        }

        if (!($className = $node->class) instanceof Node\Name) {
            return null;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (!\in_array('TranslatableMessage', $className->getParts(), true)) {
=======
        if (!\in_array('TranslatableMessage', $className->parts, true)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (!\in_array('TranslatableMessage', $className->parts, true)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return null;
        }

        $firstNamedArgumentIndex = $this->nodeFirstNamedArgumentIndex($node);

        if (!$messages = $this->getStringArguments($node, 0 < $firstNamedArgumentIndex ? 0 : 'message')) {
            return null;
        }

        $domain = $this->getStringArguments($node, 2 < $firstNamedArgumentIndex ? 2 : 'domain')[0] ?? null;

        foreach ($messages as $message) {
            $this->addMessageToCatalogue($message, $domain, $node->getStartLine());
        }

        return null;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function leaveNode(Node $node): ?Node
    {
        return null;
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function afterTraverse(array $nodes): ?Node
    {
        return null;
    }
}
