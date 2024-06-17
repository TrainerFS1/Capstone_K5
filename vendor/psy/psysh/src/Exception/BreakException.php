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
 * A break exception, used for halting the Psy Shell.
 */
class BreakException extends \Exception implements Exception
{
    private $rawMessage;

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct($message = '', $code = 0, ?\Throwable $previous = null)
=======
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->rawMessage = $message;
        parent::__construct(\sprintf('Exit:  %s', $message), $code, $previous);
    }

    /**
     * Return a raw (unformatted) version of the error message.
     */
    public function getRawMessage(): string
    {
        return $this->rawMessage;
    }

    /**
     * Throws BreakException.
     *
     * Since `throw` can not be inserted into arbitrary expressions, it wraps with function call.
     *
     * @throws BreakException
     */
    public static function exitShell()
    {
        throw new self('Goodbye');
    }
}
