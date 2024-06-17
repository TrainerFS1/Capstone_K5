<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Exception;

/**
 * Raised when a session does not exist. This happens in the following cases:
 * - the session is not enabled
 * - attempt to read a session outside a request context (ie. cli script).
 *
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
class SessionNotFoundException extends \LogicException implements RequestExceptionInterface
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(string $message = 'There is currently no session available.', int $code = 0, ?\Throwable $previous = null)
=======
    public function __construct(string $message = 'There is currently no session available.', int $code = 0, \Throwable $previous = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(string $message = 'There is currently no session available.', int $code = 0, \Throwable $previous = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        parent::__construct($message, $code, $previous);
    }
}
