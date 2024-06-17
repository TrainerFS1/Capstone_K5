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
 *
 * Code mostly comes from https://github.com/php-translation/extractor/blob/master/src/Visitor/Php/Symfony/Constraint.php
 */
final class ConstraintVisitor extends AbstractVisitor implements NodeVisitor
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
    private const CONSTRAINT_VALIDATION_MESSAGE_PATTERN = '/[a-zA-Z]*message/i';

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private const CONSTRAINT_VALIDATION_MESSAGE_PATTERN = '/[a-zA-Z]*message/i';

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(
        private readonly array $constraintClassNames = []
    ) {
    }

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
        if (!$node instanceof Node\Expr\New_ && !$node instanceof Node\Attribute) {
            return null;
        }

        $className = $node instanceof Node\Attribute ? $node->name : $node->class;
        if (!$className instanceof Node\Name) {
            return null;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $parts = $className->getParts();
=======
        $parts = $className->parts;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $parts = $className->parts;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $isConstraintClass = false;

        foreach ($parts as $part) {
            if (\in_array($part, $this->constraintClassNames, true)) {
                $isConstraintClass = true;

                break;
            }
        }

        if (!$isConstraintClass) {
            return null;
        }

        $arg = $node->args[0] ?? null;
        if (!$arg instanceof Node\Arg) {
            return null;
        }

        if ($this->hasNodeNamedArguments($node)) {
<<<<<<< HEAD
<<<<<<< HEAD
            $messages = $this->getStringArguments($node, '/message/i', true);
=======
            $messages = $this->getStringArguments($node, self::CONSTRAINT_VALIDATION_MESSAGE_PATTERN, true);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $messages = $this->getStringArguments($node, self::CONSTRAINT_VALIDATION_MESSAGE_PATTERN, true);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } else {
            if (!$arg->value instanceof Node\Expr\Array_) {
                // There is no way to guess which argument is a message to be translated.
                return null;
            }

            $messages = [];
            $options = $arg->value;

            /** @var Node\Expr\ArrayItem $item */
            foreach ($options->items as $item) {
                if (!$item->key instanceof Node\Scalar\String_) {
                    continue;
                }

<<<<<<< HEAD
<<<<<<< HEAD
                if (false === stripos($item->key->value ?? '', 'message')) {
=======
                if (!preg_match(self::CONSTRAINT_VALIDATION_MESSAGE_PATTERN, $item->key->value ?? '')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                if (!preg_match(self::CONSTRAINT_VALIDATION_MESSAGE_PATTERN, $item->key->value ?? '')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    continue;
                }

                if (!$item->value instanceof Node\Scalar\String_) {
                    continue;
                }

                $messages[] = $item->value->value;

                break;
            }
        }

        foreach ($messages as $message) {
            $this->addMessageToCatalogue($message, 'validators', $node->getStartLine());
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
