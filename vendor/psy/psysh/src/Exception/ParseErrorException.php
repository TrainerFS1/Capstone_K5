<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Exception;

/**
 * A "parse error" Exception for Psy.
 */
class ParseErrorException extends \PhpParser\Error implements Exception
{
    /**
     * Constructor!
     *
<<<<<<< HEAD
     * @param string    $message    (default: '')
     * @param array|int $attributes Attributes of node/token where error occurred
     *                              (or start line of error -- deprecated)
     */
    public function __construct(string $message = '', $attributes = [])
    {
        $message = \sprintf('PHP Parse error: %s', $message);

        if (!\is_array($attributes)) {
            $attributes = ['startLine' => $attributes];
        }

        parent::__construct($message, $attributes);
=======
     * @param string $message (default: "")
     * @param int    $line    (default: -1)
     */
    public function __construct(string $message = '', int $line = -1)
    {
        $message = \sprintf('PHP Parse error: %s', $message);
        parent::__construct($message, $line);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Create a ParseErrorException from a PhpParser Error.
     *
     * @param \PhpParser\Error $e
     */
    public static function fromParseError(\PhpParser\Error $e): self
    {
<<<<<<< HEAD
        return new self($e->getRawMessage(), $e->getAttributes());
=======
        return new self($e->getRawMessage(), $e->getStartLine());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
