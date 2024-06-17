<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Exception;

class IncompleteDsnException extends InvalidArgumentException
{
<<<<<<< HEAD
    public function __construct(string $message, ?string $dsn = null, ?\Throwable $previous = null)
=======
    public function __construct(string $message, string $dsn = null, \Throwable $previous = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if ($dsn) {
            $message = sprintf('Invalid "%s" provider DSN: ', $dsn).$message;
        }

        parent::__construct($message, 0, $previous);
    }
}
