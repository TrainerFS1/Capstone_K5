<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Exception;

/**
 * @author Ben Ramsey <ben@benramsey.com>
 */
class UnauthorizedHttpException extends HttpException
{
    /**
     * @param string $challenge WWW-Authenticate challenge string
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(string $challenge, string $message = '', ?\Throwable $previous = null, int $code = 0, array $headers = [])
=======
    public function __construct(string $challenge, string $message = '', \Throwable $previous = null, int $code = 0, array $headers = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(string $challenge, string $message = '', \Throwable $previous = null, int $code = 0, array $headers = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $headers['WWW-Authenticate'] = $challenge;

        parent::__construct(401, $message, $previous, $headers, $code);
    }
}
