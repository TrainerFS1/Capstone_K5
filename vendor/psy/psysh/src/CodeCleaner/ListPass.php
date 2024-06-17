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
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayDimFetch;
// @todo Switch to PhpParser\Node\ArrayItem once we drop support for PHP-Parser 4.x
=======
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayDimFetch;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayDimFetch;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\List_;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Variable;
use Psy\Exception\ParseErrorException;

/**
 * Validate that the list assignment.
 */
class ListPass extends CodeCleanerPass
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private $atLeastPhp71;

    public function __construct()
    {
        $this->atLeastPhp71 = \version_compare(\PHP_VERSION, '7.1', '>=');
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * Validate use of list assignment.
     *
     * @throws ParseErrorException if the user used empty with anything but a variable
     *
     * @param Node $node
     *
     * @return int|Node|null Replacement node (or special return value)
     */
    public function enterNode(Node $node)
    {
        if (!$node instanceof Assign) {
            return;
        }

        if (!$node->var instanceof Array_ && !$node->var instanceof List_) {
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!$this->atLeastPhp71 && $node->var instanceof Array_) {
            $msg = "syntax error, unexpected '='";
            throw new ParseErrorException($msg, $node->expr->getLine());
        }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        // Polyfill for PHP-Parser 2.x
        $items = isset($node->var->items) ? $node->var->items : $node->var->vars;

        if ($items === [] || $items === [null]) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new ParseErrorException('Cannot use empty list', ['startLine' => $node->var->getStartLine(), 'endLine' => $node->var->getEndLine()]);
=======
            throw new ParseErrorException('Cannot use empty list', $node->var->getLine());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            throw new ParseErrorException('Cannot use empty list', $node->var->getLine());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        $itemFound = false;
        foreach ($items as $item) {
            if ($item === null) {
                continue;
            }

            $itemFound = true;

<<<<<<< HEAD
<<<<<<< HEAD
            if (!self::isValidArrayItem($item)) {
                $msg = 'Assignments can only happen to writable values';
                throw new ParseErrorException($msg, ['startLine' => $item->getStartLine(), 'endLine' => $item->getEndLine()]);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            // List_->$vars in PHP-Parser 2.x is Variable instead of ArrayItem.
            if (!$this->atLeastPhp71 && $item instanceof ArrayItem && $item->key !== null) {
                $msg = 'Syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting \',\' or \')\'';
                throw new ParseErrorException($msg, $item->key->getLine());
            }

            if (!self::isValidArrayItem($item)) {
                $msg = 'Assignments can only happen to writable values';
                throw new ParseErrorException($msg, $item->getLine());
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        }

        if (!$itemFound) {
            throw new ParseErrorException('Cannot use empty list');
        }
    }

    /**
     * Validate whether a given item in an array is valid for short assignment.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Node $item
     */
    private static function isValidArrayItem(Node $item): bool
=======
     * @param Expr $item
     */
    private static function isValidArrayItem(Expr $item): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param Expr $item
     */
    private static function isValidArrayItem(Expr $item): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $value = ($item instanceof ArrayItem) ? $item->value : $item;

        while ($value instanceof ArrayDimFetch || $value instanceof PropertyFetch) {
            $value = $value->var;
        }

        // We just kind of give up if it's a method call. We can't tell if it's
        // valid via static analysis.
        return $value instanceof Variable || $value instanceof MethodCall || $value instanceof FuncCall;
    }
}
